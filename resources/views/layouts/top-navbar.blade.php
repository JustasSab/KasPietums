<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Receptai
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                        <a class="dropdown-item" href="{{$category->slug}}">{{$category->name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Apie Mus</a>
            </li>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                        </li>
                    @endif
                @else
                <!-- Authenticated user -->
                @if (auth()->check())
                <!-- If Admin -->
                    @if (auth()->user()->is_admin == 0)
                        <div class="shopping-cart-icon py-2">
                            <i class="fa fa-shopping-basket"></i>
                        </div>
                    @endif
                @endif

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <!-- Dashboard -->
                        @if (auth()->check())
                            <!-- If Admin -->
                                @if (auth()->user()->is_admin == 1)
                                    <a class="dropdown-item" href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a>
                            @endif
                        @endif
                        <!-- Profile -->
                        @if (auth()->check())
                            <!-- If Admin -->
                            @if (auth()->user()->is_admin == 1)
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">{{ __('Profilis') }}</a>
                            <!-- If User -->
                            @elseif (auth()->user()->is_admin == 0)
                                <a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profilis') }}</a>
                            @endif
                        @endif
                        <!-- Logout -->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Atsijungti') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
