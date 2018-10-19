<header role="banner" class="transparent light">
    <div class="row">
        <div class="nav-inner row-content buffer-left buffer-right even clear-after">
            <div id="brand">
                <h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="{{ route('index') }}">LNS</a></h1>
            </div><!-- brand -->
            <a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
            <nav>
                <ul class="reset" role="navigation">
                    <li class="menu-item">
                        <a href="{{ route('index') }}">Home</a>
                        <ul class="sub-menu">
                            <li><a href="home-01.html">Generic Home Page</a></li>
                            <li><a href="home-02.html">App Showcase</a></li>
                            <li><a href="home-03.html">App Showcase Alternative</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="blog-4-columns-masonry.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-4-columns-masonry.html">Four Columns Grid</a></li>
                            <li><a href="blog-list-sidebar.html">List Style with Sidebar</a></li>
                            <li><a href="single-blog-post.html">Single Post</a></li>
                            <li><a href="single-blog-post-sidebar.html">Single Post with Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="resume.html">Buscar</a></li>
                    <li class="menu-item"><a href="contact.html">Contacto</a></li>
                    @guest
                        <li class="menu-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="menu-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="menu-item">
                            <a href="blog-4-columns-masonry.html">{{ Auth::user()->name }}</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('profile.index') }}">Perfil</a>
                                </li>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Salir
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div><!-- row-content -->	
    </div><!-- row -->	
</header>