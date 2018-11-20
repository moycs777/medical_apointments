<!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span class="icon-logo"></span>
          <span class="sr-only">Dr. Fernando</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="{{ route('admin.home') }}"><small></small>Admin<span 
                 class="sr-only">(current)</span>
              </a>
            </li>
            <!-- <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#">Opcion 2</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#" 
              target="_blank">Opcion 3</a>
            </li> -->
            <!-- <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li> -->
            <!-- <li class="navbar-divider hidden-sm-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li> -->
            @guest
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li> 
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="{{ route('register') }}">Registro</a>
            </li> 
            @else
            <li class="nav-item dropdown hidden-sm-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="web/img/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                <div class="media">
                  <div class="media-left">
                    <img src="web/img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading">{{ Auth::user()->name }}</h5>
                    <h6>{{ Auth::user()->email }}</h6>
                  </div>
                </div>
                <a href="{{ route('appoints.index') }}" class="dropdown-item text-uppercase">Citas</a>
                {{-- <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
                <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a> --}}
                <a href="{{ route('logout') }}" class="dropdown-item text-uppercase text-muted" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Salir
                </a>
                <a href="{{ route('appoints.create') }}" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
                <form id="logout-form" 
                  action="{{ route('logout') }}" 
                  method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
        @guest
        @else
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="web/img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">{{ Auth::user()->name }}</h5>
              <h6>{{ Auth::user()->email }}</h6>
            </div>
          </div>
          <a href="{{ route('appoints.index') }}" class="dropdown-item text-uppercase">Ver citas</a>
          {{-- <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
          <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a> --}}
          <a href="{{ route('logout') }}" class="dropdown-item text-uppercase text-muted" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Salir
          </a>
          <a href="{{ route('appoints.create') }}" class="btn-circle has-gradient pull-xs-right m-b-1">
            <span class="sr-only">Edit</span>
            <span class="icon-edit"></span>
          </a>
        </div>
        @endguest
      </div>
    </nav>
