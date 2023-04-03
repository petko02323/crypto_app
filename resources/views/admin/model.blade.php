@extends('admin.master')

@section('content')

<div class="col-xs-12">
    <div class="row">  
        <div class="col-md-10"><h3>@lang('model.'.$name) </h3></div>   
        <div class="col-md-2" style="padding-top: 20px;"><a href="/admin/models/add/{{ $name }}" class="btn btn-primary">Pridať</a> </div>       
    </div>
  <div class="table-responsive">          
    <table class="table">
      <thead>            
        <tr>
          @foreach($pars as $par)
          <th style="min-width: 85px;" > <a href="/admin/models/{{ $name }}/{{ ($page > 1) ?: 1 }}/{{$par}}"><span>&uarr;</span></a> @lang('model.'.$par) <a href="/admin/models/{{ $name }}/{{ ($page > 1) ?: 1 }}/{{$par}}/desc"><span>&darr;</span></a></th>
          @endforeach
          @if($name == 'user')
          <th>@lang('model.roles')</th>
          <th>@lang('model.permisions')</th>
          @endif
          @if($name == 'product')
          <th>@lang('model.producer')</th>
          <th>@lang('model.category')</th>
          @endif
          <th style="width: 15%;"> Úpravy </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($models as $model)
        <tr>
          @include('admin.partials._tablerules')
          @if($name == 'user')
            <td>@foreach ($model->roles as $role){{ $role->name . ', ' }} @endforeach</td>
            <td>@foreach ($model->permissions as $permission){{ $permission->name .', ' }} @endforeach</td>
          @endif
          @if($name == 'product')
            <td>{{ $model->producer->title }} </td>
            <td>@foreach ($model->category as $category){{ $category->name }} @endforeach</td>
          @endif
          <td>
            @include('admin.partials._actions')
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <ul class="pagination">
    <li><a href="/admin/models/{{ $name }}/{{ ($page > 1) ? $page - 1 : 1 }}/{{ $orderBy }}/{{ ($how == 'asc') ? '' : $how }}" rel="prev">« Predošlí</a></li> 
    <li><a href="/admin/models/{{ $name }}/{{ ($page >= 1) ? $page + 1 : 2 }}/{{ $orderBy }}/{{ ($how == 'asc') ? '' : $how }}" rel="next">Ďalší »</a></li>
  </ul>        

</div>
@endsection

@section('script')
<script>
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
@endsection

