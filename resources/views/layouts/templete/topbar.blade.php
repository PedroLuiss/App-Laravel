   <div class="navbar-custom topnav-navbar topnav-navbar-dark" style="position: fixed;width: 100%;
    z-index: 100;">
    <div class="container-fluid">
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                      
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="{{asset('img/placeholder.png')}}" alt="user-image" class="rounded-circle">
                </span>
                <span  style="color: #fff;">
                    <span class="account-user-name">{{Auth::user()->email}}</span>
                    <span class="account-position">Admin</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
            aria-labelledby="topbar-userdrop">
            <!-- item-->
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bienvenido !</h6>
            </div>            
            <!-- Logout-->
             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Salir </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
            </form>

        </div>
    </li>
</ul>

<div class="visit_website">
    <h4 style="color: #fff; float: left;">App::Laravel</h4>  
</div>
</div>
</div>