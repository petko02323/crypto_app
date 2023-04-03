<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('admin.partials._head')
  <body>
    <div id="app">
      @include('admin.partials._sidebaradmin')
      <div style="margin-left: 280px;">
        @include('admin.partials._navigation')    
        <div class="container-fluid">
          <div class="row">       
            @yield('content')
          </div>
        </div>  
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    
    @yield('script')

  </body>
</html>