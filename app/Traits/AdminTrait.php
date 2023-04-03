<?php

namespace App\Traits;

trait AdminTrait{
  
  public function getClassName() {
    $str = explode('\\', get_class($this));
    return strtolower(last($str));
  }
  
  /*
   * @param string: pivot table
   * @return array()
   */
  public function pivotDataToArray($pivots){
      $returnIds=[];
        foreach($this->$pivots as $data){
          array_push($returnIds, $data->id);
        }
        return $returnIds;
  }
  
  /*
   * pripravuje data pre select field
   * @param string
   * @param collection
   * 
   * @return array
   * 
   */
  
  public function organizeSelectData($pivots, $data){    
    $n=1;
    if($data ==  null){
      return false;
    }
    $selectData = [];
    $pivots = $this->pivotDataToArray($pivots);
    foreach($data as $d){
      if(in_array($d->id, $pivots)){
        $selectData[0] = $d;
      }else{
        $selectData[$n] = $d;
      }
      $n++;
    }
    // mal zadanu hodnotu alebo nie
    if(!array_key_exists(0,$selectData)){
      $object = new \stdClass();
      $object->id = 'X';
      $object->title = 'vyberte hodnotu';
      $selectData[0] = $object;
    }
    ksort($selectData);
    return $selectData;
  }
  
}
