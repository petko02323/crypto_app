<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header" style="margin-left: 95px;">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/') }}">
        <span class="glyphicon glyphicon-home" ></span> Hlavná stránka
      </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        &nbsp;
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        @else
        <li>
          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
            Vitajte {{ Auth::user()->name }}
          </a>
        </li>
        <li>
<!--          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
            Odhlásiť
          </a>-->

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>  