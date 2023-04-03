@foreach($pars as $par)
<td>                     
  <?php switch ($par) {   
  case "link" :
    ?> 
    <a href="{{ $model->$par }}" target="_blank">
      {{ $model->$par }} </a></td>          
    <?php break; 
  case "type" :
    ?>                   
    {{ $model->getBoxTypeTitle() }}</td>                                
    <?php break;
    case "coursetype_id" :
    ?>                   
    {{ $model->courseType->title }}</td>                                
    <?php break;
  case "removable" :
    ?>                   
    {{ ($model->$par) ? 'áno' : 'nie' }}</td>                                
    <?php break;
  case "confirmed" :
    ?>                   
    {{ ($model->$par) ? 'áno' : 'nie' }}</td>                                
    <?php break;
  case "agreement" :
    ?>                   
    {{ ($model->$par) ? 'áno' : 'nie' }}</td>                                
    <?php break;
  case "published" :
    ?>                   
    {{ ($model->$par) ? 'áno' : 'nie' }}</td>                                
    <?php break;
  case "lector" :
    ?>                   
    {{ ($model->$par) ? 'áno' : 'nie' }}</td>                                
    <?php break;
  case "author" :
    ?>                   
    {{ ($model->$par) ? 'áno' : 'nie' }}</td>                                
    <?php break;
  case "cat_id" :
    ?>                   
    {{ ($model->category->title) }}</td>                                
    <?php break;
  case "payment_id" :
    ?>                   
    {{ ($model->$par) ? date("d.m.Y", strtotime($model->payment->updated_at)) : 'neuhradená' }}</td>                                
    <?php break;
  case "from" :
    ?>                   
    {{ date("d.m.Y", strtotime($model->$par)) }}</td>                                
    <?php break;
  case "to" :
    ?>                   
    {{ date("d.m.Y", strtotime($model->$par)) }}</td>                                
    <?php break;
  case "updated_at" :
    ?>                   
    {{ date("d.m.Y H:i:s", strtotime($model->$par)) }}</td>                                
    <?php break;
  case "description" :
    ?>                   
    {{ substr(($model->$par),0,105) }}</td>                                
    <?php break;
  case "amount" :
    ?>                   
    {{ number_format($model->$par, 2) }} &euro;</td>                                
    <?php break;
  case "price" :
    ?>                   
    {{ number_format($model->$par, 2) }} &euro;</td>                                
    <?php break;
  default :
    ?> 
    {{ $model->$par }}                       
    </td>
<?php } ?>
@endforeach