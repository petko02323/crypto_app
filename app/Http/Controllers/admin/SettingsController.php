<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Texts;
use App\Lib\Config\ConfigManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
  public static $_jsonFiles=[
    'spol' => 'company.json',
    'form' => 'form.json'
  ];

  public function __construct() {

    $this->middleware('auth');
  }

  public function index(Request $request){
    $group='spol';
    if($request->all()){
      file_put_contents(__DIR__."/../../../../".self::$_jsonFiles[$group], Texts::toJson($request->except('_token')));
      return redirect()->back();
    }

    $string = file_get_contents(__DIR__."/../../../../".self::$_jsonFiles[$group]);
    $data = json_decode(utf8_encode($string), true);
    $data = Texts::prepareData($data);


    return view('admin.settings.index', compact('data'));
  }

  public function updatePassword(Request $request){
      $user = Auth::user();

      if(Hash::check($request->oldPwd, $user->password)){
          //dd("je rovnake");
          if($request->newPwd == $request->confPwd){
              //dd("heslo je ok");
              $user->update([
                  'password' => Hash::make($request->newPwd),
              ]);
              return redirect()->back()->with('info', 'Heslo bolo úspešne zmenené');
          } else {
              return redirect()->back()->with('info', 'Heslo ktoré ste potvrdili sa nezhoduje s novým heslom');
          }
      } else {
          //dd("nie je rovnake");
          return redirect()->back()->with('info', 'Nezadali ste správne aktuálne heslo');
      }


  }



}
