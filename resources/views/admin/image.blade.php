@extends('admin.master')

@section('content')
      <div class="col-md-6">
        <h3>Hlavný obrázok na stránku </h3>
        @include('partials._errors')
        <form method="post" action="{{ route('admin.image') }}" enctype="multipart/form-data" >
          {{ csrf_field() }}
           <div class="form-group">
            <label for="pageId">Vyberte stránku:</label>            
            <select class="form-control" id="pageId" name="pageId" >       
              @if( old('page'))
                <option value='{{ old('pageId') }} '>{{ $links[old('pageId')] }} </option>
              @endif
              @foreach($links as $link => $href)
              <option value=" {{ $link }} " >{{ $href }}</option>
              @endforeach
            </select>
           </div>  
                  
          <div class="form-group">
            <label for="alt">Alt. text:</label>
            <input type="text" class="form-control" id="alt" name="alt" value='{{ (old('alt'))?: '' }}'>             
          </div>
           
          <div id='files' class="form-group">
            <label for="filename">Obrázok</label>
            <input type="file" class="form-control" id="filename" name="filename" >
          </div>
          
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submite" value="Nahrať">
          </div> 
          
        </form>     
        <div class="alert alert-info">          
        Umožňuje nahrať obrázok pre niektoré stránky. Ak je nahratý, tak nahradí základný obrázok. 
        <ul>
          <li> <strong>pre /uvod</strong> sa mení podkladový obrázok sekcie o nás</li>
          <li> <strong>pre /sortiment/{produkt}</strong> sa mení podkladový obrázok odkazu v časti sortiment</li>
          <li> <strong>pre /kontakt, a /sluzby_a_servis</strong> podkladový obrázok kontaktného formulára</li>
        </ul>
        
        </div>

      </div>
       
@endsection
