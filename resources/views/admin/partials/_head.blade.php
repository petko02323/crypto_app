<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CryptoApp') }}</title>
    <script src="https://cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/newapp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css.map') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"   integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css" />
    <style>
        .nav-item.active a {
          color: black;
        }
        label.checkbox{
          margin-left: 20px;
        }
        .marTop{
          margin-top: 30px;
        }
        .imgPreview{
          height: 140px;
          overflow: hidden;
        }
        h3{
          color: #3097D1;
        }
        .greyBlock{
          background-color: lightgray;
          padding-bottom: 20px;
        }
        .table-borderless>tbody>tr>td {
            border-color: white;
        }
        .roledDiv{
            height: 200px;
            width: 100%;
            overflow-y: scroll;
            background-color: #f0eded;
            padding: 10px;
            border: 1px solid #c7c5c5;
            border-radius: 5px;
        }
    </style>


</head>
