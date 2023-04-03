@extends('admin.master')

@section('content')

      <div class="{{ ($model == 'page') ?  'col-md-10' : 'col-md-6' }}">
        <h3>Pridať zápis</h3>
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
            @foreach ($data as $d) 
               @if(in_array($d, $contentEditables))
               <div class="form-group">
                <label for="{{ $d }}">@lang('model.'.$d)</label>
                <textarea class="form-control" id='{{ $d }}' name="{{ $d }}" >{{ old($d)?: '' }}</textarea>               
               <?php array_push($editables, $d); ?>
               </div>
              @elseif($d == 'isNav')
              <div class="form-group">
              <label for="{{ $d }}">@lang('model.'.$d)</label>
              <select class="form-control" id="{{ $d }}" name="{{ $d }}">
                <option value='0' >nie</option>
                <option value='1' >áno</option>
              </select>
              </div>
             @elseif($d == 'capitol')
              <div class="form-group">
              <label for="{{ $d }}">@lang('model.'.$d)</label>
              <select class="form-control" id="{{ $d }}" name="{{ $d }}">
                @foreach($capitols as $val => $text)
                <option value="{{ $val }}" >{{ $text}}</option>
                @endforeach
              </select>
              </div>
              @elseif($d == 'grp')
              <div class="form-group">
              <label for="{{ $d }}">@lang('model.'.$d)</label>
              <select class="form-control" id="{{ $d }}" name="{{ $d }}">
                @foreach($grps as $val => $text)
                <option value="{{ $val }}" >{{ $text}}</option>
                @endforeach
              </select>
              </div>
              @elseif($d == 'password')
              <div class="form-group">
                <label for="{{ $d }}">@lang('model.'.$d)</label>
                <input type="password" class="form-control" id="{{ $d }}}" name="{{ $d }}" value="{{ old($d) }}">
              </div>              
              @else
              <div class="form-group">
                <label for="{{ $d }}">@lang('model.'.$d)</label>
                <input type=<?=($d == 'id') ? "hidden" : "text"?> class="form-control" id="{{ $d }}}" name="{{ $d }}" value="{{ old($d) }}">
              </div>
              @endif
            @endforeach
            @if($model == 'user')
              <div class="form-group">
                <label for="password-confirm">Potvrdiť heslo</label>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" >
              </div>
            @endif
            <button type="submit" class="btn btn-default">Zadať</button>
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