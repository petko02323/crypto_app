@extends('admin.master')

@section('content')
<div class="container">
      <div class="col-md-10">
        <h3>Pridať zápis</h3>
        @include('admin.partials._errors')
        <form method="post" action="{{ route('updateArticle') }}">
            {{ csrf_field() }}
            @foreach ($data as $d)
              @if($d == 'body')
              <div class="form-group">
                <label for="{{ $d }}">@lang('model.'.$d)</label>
                <textarea class="form-control" id="{{ $d }}" name="{{ $d }}" >{{ old($d) ?: $article->$d }}</textarea>
              </div>
              @else
              <div class="form-group">
                <label for="{{ $d }}">@lang('model.'.$d)</label>
                <input type=<?=($d == 'id') ? "hidden" : "text"?> class="form-control" id="{{ $d }}}" name="{{ $d }}" value="{{ old($d) ?: $article->$d }}">
              </div>
             @endif
            @endforeach
            <hr>
            <div class="form-group">
               <input type="hidden" class="form-control"  name="uid" value="{{ $article->id }}">
              <button type="submit" class="btn btn-default">Zadať</button>
            </div>
        </form>

      </div>
</div>
@endsection

@section('script')
<script>
 @isset($editables)
 @foreach($editables as $e)
  CKEDITOR.replace( {{ $e }},
  { font_names: 'Calibri/Calibri, Verdana, Geneva, sans-serif;'+
               'Arial/Arial, Helvetica, sans-serif;'+
                'Comic Sans MS/Comic Sans MS, cursive;'+
                'Courier New/Courier New, Courier, monospace;'+
                'Georgia/Georgia, serif;'+
                'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;'+
                'Tahoma/Tahoma, Geneva, sans-serif;'+
                'Times New Roman/Times New Roman, Times, serif;'+
                'Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;'+
                'Verdana/Verdana, Geneva, sans-serif'
          });
 @endforeach
 @endisset
</script>
@endsection
