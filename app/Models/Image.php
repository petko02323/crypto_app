<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;
use App\SomeFile;
use Intervention\Image\Facades\Image as Img;

class Image extends Model
{

    protected $fillable = [
        'path', 'filename'
    ];

    public static $ext = ['jpeg', 'jpg', 'gif', 'png', 'bmp', 'svg'];

    public static function getModelAttributes()
    {
        $model = new Image();
        return $model->getFillable();
    }


    public function article()
    {
        return $this->belongsToMany(Article::class, 'articles_images');
    }

    public function getPath()
    {
        return sprintf("/%s/%s", $this->path, $this->filename);
    }


    // mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm STATIC mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm

    private static function resizeAndSave($file, $path, $name, $extension, $newWidth, $newHeight, $prefix = null)
    {
        list($width, $height) = getimagesize($file);
//      if($newHeight > $height){
//        $newHeight = $height;
//      }
        $background = Img::canvas($newWidth, $newHeight);

        $image = Img::make(file_get_contents($file))->resize($newWidth, $newHeight, function ($c) {
            //$c->aspectRatio();
            $c->upsize();
        });
        $background->insert($image, 'center');
        $filename = ($prefix) ? $prefix . '_' . $name . '.' . $extension : $name . '.' . $extension;
        $thumbnail = $path . '/' . $filename;
        $background->save($thumbnail);
    }

    public static function checkOrMkDirectory($filename)
    {
        if (!file_exists($filename)) {
            //dd($filename);
            mkdir($filename, 0755);
        }
    }


    public static function saveWithRefence($request)
    {

        $file = $request->file('file');
        if (!in_array($file->extension(), self::$ext)) {
            // file upload
            SomeFile::saveWithRefence($request);
        } else {
            $name = uniqid();
            $filename = $name . '.' . $file->extension();
            $path = 'gallery/' . $request->model . '/' . $request->id;
            self::checkOrMkDirectory($path);

            $file->move($path, $filename);

            // save image reference
            $image = new Image;
            $image->path = $path;
            $image->filename = $filename;
            $image->save();

            $image->article()->attach($request->id);

        }
    }

    public static function superDelete($model, $id)
    {
        $image = Image::find($id);

        $image->article()->detach($id);

        File::delete($image->path . '/' . $image->filename);

        //delete DB row
        $image->delete();
    }


}
