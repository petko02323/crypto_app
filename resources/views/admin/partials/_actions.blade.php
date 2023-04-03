<a href='/admin/models/detail/{{$model->getClassName()}}/{{ $model->id }}' data-toggle="tooltip" title="Detail" >&nbsp;<span class="glyphicon glyphicon-eye-open" style="color: #3333ff; " ></span></a>                         
@if($name != 'user')
<a href='/admin/models/update/{{$model->getClassName()}}/{{ $model->id }}' data-toggle="tooltip" title="Upraviť">&nbsp;<span class="glyphicon glyphicon-pencil"  style="color: #3333ff; " ></span></a>
@endif
@if($name == 'page')
<a href='/admin/image/{{ $model->id }}' data-toggle="tooltip" title="Nahrať hlavný obrázok">&nbsp;<span class="glyphicon glyphicon-edit"  style="color: #3333ff; " ></span></a>
<a href='/admin/models/search/images/1/pageId/{{ $model->id }}' data-toggle="tooltip" title="Pozrieť hlavný obrázok">&nbsp;<span class="glyphicon glyphicon-check"  style="color: #3333ff; " ></span></a>
@endif
<a href='/admin/models/delete/{{$model->getClassName()}}/{{ $model->id }}' data-toggle="tooltip" title="Vymazať">&nbsp;<span class="glyphicon glyphicon-remove"  style="color: #3333ff; " ></span></a>