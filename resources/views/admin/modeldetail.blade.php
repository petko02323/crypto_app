@extends('admin.master')

@section('content')

<div class="col-md-8">
  <h3>Detail zapisu</h3>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Atributy</th>
          <th>Hodnota</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $key=>$value)
        <tr>
          <td>@lang('model.'.$key)</td>
          <td style="color: blue;" >{{ $value }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>      
  @if($model != 'user')
  <a href="/admin/models/update/{{ $model }}/{{ $data['id'] }}" class="btn btn-primary">Upraviť</a>
  @endif
</div>
</div>
@endsection