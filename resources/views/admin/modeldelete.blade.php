@extends('admin.master')

@section('content')

<div class="col-md-6">
  <h3>Detail zapisu</h3>
  @if(isset($noData))
  <div class="alert alert-danger">
    Uvedené dáta sa v db nenašli!
  </div>
  @else       
  <div class="alert alert-danger">
    Chystáte sa vymazať údaje !!!
  </div>
  <form method="post" action="">
    {{ csrf_field() }}
    @foreach ($data as $key=>$value)         
    @if($key == 'body')
    <div class="form-group">
      <label for="{{ $key }}">@lang('model.'.$key)</label>
      <textarea class="form-control"  name="{{ $key }}" rows="20" cols="50">{{ \App\Text::br2nl($value) }}</textarea>                
    </div>
    @else
    <div class="form-group">
      <label for="{{ $key }}">@lang('model.'.$key)</label>
      <input type=<?= ($key == 'id') ? "hidden" : "text" ?> class="form-control" id="{{ $key }}}" name="{{ $key }}" value="{{ $value }}">
    </div>
    @endif
    @endforeach
    <a href="/admin/models/delete/{{ $model }}/{{ $data['id'] }}/delete" class="btn btn-danger">Definitívne vymazať</a>
  </form>         
  @endif
</div>

@endsection