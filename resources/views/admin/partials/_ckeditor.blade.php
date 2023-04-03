<script>
 @isset($editables) 
 @foreach($editables as $e)
  CKEDITOR.replace( {{ $e }} );
 @endforeach
 @endisset

</script>