<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AdminTrait;


class Article extends Model
{
    use AdminTrait;

    protected $fillable = [
        'title', 'body'
    ];

    public static $rules = [
        'title' => 'required|string|max:255',
        'body' => 'required|string'
    ];

    public function images(){

        return $this->belongsToMany(Image::class, 'articles_images');
    }

    public function getMainImage(){

       return $this->images->count() ? $this->images->first()->getPath() : "";
    }

    public static function getModelAttributes() {
        $model = new Article();
        return $model->getFillable();
    }

    public static function mainTableValues() {
        if(!isset(self::$displayMainTableValues)) return self::getModelAttributes ();
        return self::$displayMainTableValues;
    }
}
