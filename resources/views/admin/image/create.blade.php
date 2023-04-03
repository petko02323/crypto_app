@extends('admin.master')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h3>Pridať súbory a obrázky</h3>
            <hr>
            <p> Podporované formáty obrázkov <b>{ jpeg, jpg, gif, png, bmp, svg }</b></p>
            @include('admin.partials._errors')
            <form action="{{ url('admin/image/upload')}}" class="dropzone" id="addImages">
                <div class="dz-message" data-dz-message>
                    <span>Súbory a obrázky nahráte potiahnutím nad túto plochu</span></div>
                {{ csrf_field() }}
                <input type='hidden' name='model' value='{{ $model }}'>
                <input type='hidden' name='id' value='{{ $id }}'>
            </form>
            @if($model == 'article')
                @include('admin.image.partials._article')
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script>
        @isset($editables)
        @foreach($editables as $e)
        CKEDITOR.replace({{ $e }},
            {
                font_names: 'Calibri/Calibri, Verdana, Geneva, sans-serif;' +
                    'Arial/Arial, Helvetica, sans-serif;' +
                    'Comic Sans MS/Comic Sans MS, cursive;' +
                    'Courier New/Courier New, Courier, monospace;' +
                    'Georgia/Georgia, serif;' +
                    'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;' +
                    'Tahoma/Tahoma, Geneva, sans-serif;' +
                    'Times New Roman/Times New Roman, Times, serif;' +
                    'Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;' +
                    'Verdana/Verdana, Geneva, sans-serif'
            });
        @endforeach
        @endisset
    </script>
@endsection
