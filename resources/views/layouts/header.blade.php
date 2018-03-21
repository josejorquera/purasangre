<header class="header">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </li> 
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!--LOGO-->
            {{-- <a class="page-brand" href="index.html">A</a> --}}
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                @auth
                  <span class="text-white user-name">{{ Auth::user()->name }}</span>
                @endauth

                <!-- Authentication Links -->
                @guest
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
{{--                   <li class="dropdown dropdown-user">


                      <a class="nav-link link" data-toggle="dropdown" aria-expanded="false" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                  </li> --}}
                @endguest
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </header>


        <nav class="page-sidebar">
            <div class="slimScrollDiv" >
                <ul class="side-menu metismenu scroller" >
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-user"></i>
                            <span class="nav-label">{{Auth::user()->name}}</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse" aria-expanded="false">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">MENU</li>
                    <li>
                        <a href="javascript:;">
                            <i class="sidebar-item-icon ti-agenda"></i>
                            <span class="nav-label">Clientes</span>
                            <i class="fa fa-angle-left arrow"></i>
                        </a>
                        <ul class="nav-2-level collapse" aria-expanded="false">
                            <li>
                                <a href="{{url('/client')}}">Ver todos</a>
                            </li>
                            <li>
                                <a href="{{url('/client/add')}}">Nuevo cliente</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-package"></i>
                            <span class="nav-label">Pagos</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse" aria-expanded="false">
                            <li>
                                <a href="{{url('/payment')}}">Ver todos</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="slimScrollBar"></div>
            </div>
        </nav>
