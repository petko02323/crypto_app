<!--<a href='/admin/producer/detail/{{ $model->id }}' data-toggle="tooltip" title="Detail" >&nbsp;<span class="glyphicon glyphicon-eye-open" style="color: #3333ff; " ></span></a> -->
<a href='/admin/image/article/{{ $model->id }}' data-toggle="tooltip" title="Upraviť obrázky">&nbsp;<span class="glyphicon glyphicon-picture"  style="color: #3333ff; " ></span></a>
<a href='/admin/article/edit/{{ $model->id }}' data-toggle="tooltip" title="Upraviť">&nbsp;<span class="glyphicon glyphicon-pencil"  style="color: #3333ff; " ></span></a>
<a class="dlt" data-id="{{ $model->id }}" href='#' data-toggle="tooltip" title="Vymazať">&nbsp;<span class="glyphicon glyphicon-remove"  style="color: #3333ff; " ></span></a>
<a id="{{ $model->id }}" href='/admin/article/delete/{{ $model->id }}' class="btn-sm btn-danger hidden"><small>Vymazať ?</small></a>
