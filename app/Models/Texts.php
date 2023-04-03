<?php

namespace App\Models;

class Texts {

  public static $data;
  public static $filename = __DIR__."/../resources/lang/";

  public static function prepareData(array $data){
    $allData=[];
    foreach($data as $key => $value){
      if(is_array($data[$key])){
        $new = self::addNewKeys($data[$key], $key);
        $allData = array_merge($allData, $new);
      } else {
        $allData[$key] = $value;
      }

    }
    return $allData;
  }

  public static function addNewKeys(array $data, $key){
    $new=[];
    foreach($data as $k => $v){
      $new[$key.'-'.$k] = $v;
    }
    return $new;
  }

  public static function toJson($data){
    self::dataToJson($data);
    return utf8_encode(json_encode(self::$data));
  }


  public static function dataToJson(array $data){
    self::$data = $data;
    foreach($data as $key => $value){
      if(str_contains($key, '-')){
        //dd($key);
        self::formData($key, $value, $data);
      }
    }
  }

  public static function formData($key, $value, $data){
    $subs = explode('-', $key);
    $count = count($subs);
    switch ($count){
      case 2:
        self::$data[$subs[0]][$subs[1]] = $data[$key];
        unset(self::$data[$key]);
        break;
      case 3:
        self::$data[$subs[0]][$subs[1]][$subs[2]] = $data[$key];
        unset(self::$data[$key]);
        break;
      case 4:
        self::$data[$subs[0]][$subs[1]][$subs[2]][$subs[3]] = $data[$key];
        unset(self::$data[$key]);
        break;
    }
  }

  public static function createArrayReturningFile($filename, $data, $sort = 'ASC'){
    $content = "<?php \n";
    $content .= " \n";
    $content .= "return [ \n";
    //sort data
    if($sort != 'ASC'){
      arsort($data);
    } else {
      asort($data);
    }
    foreach($data as $key => $val){
      $content .= "'" . $key ."' => '". $val."', \n";
    }
    $content .= "]; \n";
    try{
      file_put_contents($filename, $content);
      return true;
    } catch(Exception $e) {
        return false;
    }
  }

  public static function updateOrCreateMessages($lang = 'sk', $data, $sort='ASC'){
    $filename = self::$filename . $lang . '/messages.php';
    self::createArrayReturningFile($filename, $data, $sort);
  }

  public static function getTextsArray($lang, $file){
    return include(self::$filename . '/'. $lang . '/'. $file .'.php');
  }

  public static function get($key){
    $messages = self::getTextsArray('sk', 'messages');
    if(array_key_exists($key, $messages)){
      return $messages[$key];
    } else {
      return $key;
    }
  }
}
