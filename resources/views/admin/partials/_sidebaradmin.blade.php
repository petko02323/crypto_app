
<div id="sidebar" class="" style="z-index: 2000;">

    <div class="nav-top">
        <h1>
            <a href="{{ url('/admin') }}">
                {{ config('app.name', 'Marbog s.r.o') }}
            </a>
        </h1>
        Administrácia
    </div>

    <ul id="main-admin-nav" class="nav nav-pills nav-stacked">

<!--        <li class="nav-item {{ (url('/admin/index') == url()->current()) ? 'active' : '' }}">
            <a class="nav-link  " href="{{ url('/admin/index') }}" style="color: black;">Hlavná stránka</a>
        </li>-->
       <li><hr></li>
        <li class="nav-item {{ (url('/admin/articles') == url()->current()) ? 'active' : '' }}">
            <a class="nav-link  " href="{{ url('/admin/articles') }}" style="color: black;">Články</a>
        </li>



    </ul>

    <div class="nav-bottom text-center">
<!--        <a class="navbar-brand" href="{{ url('/admin/message') }}">
            <i class="material-icons">list</i>
        </a>-->
        <a class="navbar-brand" href="{{ url('/admin/settings') }}">
            <i class="material-icons">settings</i>
        </a>
<!--        <a class="navbar-brand" href="{{ url('/admin/user') }}">
            <i class="material-icons">people</i>
        </a>-->

        <a href="/logout" class="navbar-brand" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="material-icons">power_settings_new</i>
        </a>
    </div>

</div>
