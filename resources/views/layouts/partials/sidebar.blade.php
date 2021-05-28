<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
    style="background: rgb(230,32,43);">
    <div class="container-fluid d-flex flex-column p-0"><a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
            href="{{ url('/') }}">
            <div class="sidebar-brand-icon rotate-n-15"></div><img class="img-thumbnail"
                src="{{ url('images/output-onlinepngtools.png') }}" style="width: 50px;">
            <div class="sidebar-brand-text mx-3"><span>PPI-UTM</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}"><i
                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('profile')}}"><i
                        class="fas fa-user"></i><span>Profile</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('table')}}"><i
                        class="fas fa-table"></i><span>Post Management</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('feedback')}}"><i
                        class="fa fa-pencil-square"></i><span>Feedback Management</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('listBlasting')}}"><i
                        class="fas fa-envelope-square"></i><span>Email Blasting</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('academic')}}"><i
                        class="far fa-newspaper"></i><span>Academic Library</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('user-home')}}"><i
                            class="fas fa-user-circle"></i><span>Switch to Member</span></a></li>

            @guest
                @if (Route::has('login'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i
                                class="far fa-user-circle"></i><span>{{ __('Login') }}</span></a></li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i
                                class="fas fa-user-circle"></i><span>{{ __('Register') }}</span></a></li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->firstName }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest


        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle"
                type="button"></button></div>
    </div>
</nav>
