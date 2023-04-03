@extends('admin.master')

@section('content')
      <div class="{{ ($model == 'page') ?  'col-md-10' : 'col-md-6' }}">
        <h3>Detail zapisu</h3>
         @if(count($errors))
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
        @endif
        <form method="post" action="">
            {{ csrf_field() }}
            <?php $editables = []; ?>
            @foreach ($data as $key=>$value)         
              @if(in_array($key, $contentEditables))
               <div class="form-group">
                <label for="{{ $key }}">@lang('model.'.$key)</label>
                <textarea class="form-control" id='{{ $key }}' name="{{ $key }}" >{{ old($value)?: $value }}</textarea>               
               <?php array_push($editables, $key); ?>
               </div>
              @elseif($key == 'isNav')
              <div class="form-group">
              <label for="{{ $key }}">@lang('model.'.$key)</label>
              <select class="form-control" id="{{ $key }}" name="{{ $key }}">
                <option value='{{ $value }}' >{{ ($value) ? 'áno' : 'nie' }}</option>
                <option value='0' >nie</option>
                <option value='1' >áno</option>
              </select>
              </div>
              @elseif($key == 'capitol')
              <div class="form-group">
              <label for="{{ $key }}">@lang('model.'.$key)</label>
              <select class="form-control" id="{{ $key }}" name="{{ $key }}">
                @if($value)
                <option value='{{ $value }}'>{{ $capitols[$value] }}</option>
                @endif
                @foreach($capitols as $val => $text)
                <option value="{{ $val }}" >{{ $text}}</option>
                @endforeach
              </select>
              </div>
              @elseif($key == 'grp')
              <div class="form-group">
              <label for="{{ $key }}">@lang('model.'.$key)</label>
              <select class="form-control" id="{{ $key }}" name="{{ $key }}">
                @if($value)
                <option value='{{ $value }}'>{{ $grps[$value] }}</option>
                @endif
                @foreach($grps as $val => $text)
                <option value="{{ $val }}" >{{ $text}}</option>
                @endforeach
              </select>
              </div>
              @else              
              <div class="form-group">
                @if($key != 'id')
                <label for="{{ $key }}">@lang('model.'.$key)</label>
                @endif
                <input type=<?=($key == 'id') ? "hidden" : "text"?> class="form-control" id="{{ $key }}" name="{{ $key }}" value="{{ $value }}">
              </div>
              @endif
            @endforeach
            <button type="submit" class="btn btn-default">Upraviť</button>
        </form>         

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