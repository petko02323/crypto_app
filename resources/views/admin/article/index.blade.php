@extends('admin.master')

@section('content')

<div class="col-xs-12">
    <div class="row">
         @include('admin.partials._session')
        <div class="col-md-10"><h3>@lang('model.article') </h3></div>
        <div class="col-md-2" style="padding-top: 20px;"><a href="/admin/article/create/" class="btn btn-primary">Pridať</a> </div>
    </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          @foreach($pars as $par)
          <th style="min-width: 85px;" > <a href="/admin/producer/{{ ($page > 1) ?: 1 }}/{{$par}}"><span>&uarr;</span></a> @lang('model.'.$par) <a href="/admin/article/{{ ($page > 1) ?: 1 }}/{{$par}}/desc"><span>&darr;</span></a></th>
          @endforeach
          <th style="width: 15%;"> Úpravy </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($models as $model)
        <tr>
          @include('admin.partials._tablerules')
          <td>
            @include('admin.article._actions')
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <ul class="pagination">
    <li><a href="/admin/article/{{ ($page > 1) ? $page - 1 : 1 }}/{{ $orderBy }}/{{ ($how == 'asc') ? '' : $how }}" rel="prev">« Predošlí</a></li>
    <li><a href="/admin/article/{{ ($page >= 1) ? $page + 1 : 2 }}/{{ $orderBy }}/{{ ($how == 'asc') ? '' : $how }}" rel="next">Ďalší »</a></li>
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
