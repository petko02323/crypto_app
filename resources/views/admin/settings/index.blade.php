@extends('admin.master')

@section('content')
<div class="container">
    <div class="col-md-10">   
         @include('admin.partials._session')
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Základné nastavenia</a></li>
        <li class=""><a data-toggle="tab" href="#pwd">Zmena hesla</a></li>
      
      </ul>

      <div class="tab-content">
        <!-- zakladne -->
        <div id="home" class="tab-pane fade in active"> 
        @include('admin.partials._errors')
        <form method="post" action="">
            {{ csrf_field() }}             
            @foreach ($data as $k => $v)
            <div class="form-group">
                <label for="{{ $k }}">{{ ucwords($k) }} @if( $k == 'otazka_vyber')  / možností odpovedí na výber oddeľujte ; (možnosť1; možnosť2; ...;)/ @endif</label>
                <input type="text" class="form-control" id="{{ $k }}" name="{{ $k }}" value='{{ (old($k))?: $v }}'>
            </div>
            @endforeach
            <button type="submit" class="btn btn-default">Zadať</button>
        </form>    
        </div>
        <!-- stripe -->
        <div id="pwd" class="tab-pane fade in active"> 
        @include('admin.partials._errors')
        <form method="post" action="{{ route('updatePassword') }}">
            {{ csrf_field() }}             
            <div class="form-group">
                <label for="oldPwd">Staré heslo</label>
                <input type="password" class="form-control" id="" name="oldPwd" value="" required="required">
            </div>
            <div class="form-group">
                <label for="newPwd">Nové heslo</label>
                <input type="password" class="form-control" id="" name="newPwd" value="" minlength="6" required="required">
            </div>
            <div class="form-group">
                <label for="confPwd">Potvrďte nové heslo</label>
                <input type="password" class="form-control" id=""  name="confPwd" value="" minlength="6" required="required">
            </div>
            <button type="submit" class="btn btn-default">Zadať</button>
        </form>    
        </div>
       
        <!-- smart emailing -->
       
      </div>           

    </div>
</div>
@endsection
