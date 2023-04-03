<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{


  public function __construct() {

    $this->middleware('auth');
  }

  public function index($model, $id){
    $model = $model;
    $id = $id;

    $modelObject = Article::find($id);

    return view('admin.image.create', compact(['modelObject', 'model', 'id']));
  }

  public function upload(Request $request) {

    Image::saveWithRefence($request);
    return 'OK';
  }

  public function delete($model, $id){
    Image::superDelete($model, $id);

    return redirect()->back();
  }


  // mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm STATIC mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm


  public static function getClassName($name){
    return '\\App\\' . ucwords($name);
  }

}
