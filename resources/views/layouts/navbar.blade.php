<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                @auth
                    <div class="navbar-brand">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        {{ config('app.name', 'Poll') }}
                    </div>
                @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        {{ config('app.name', 'Poll') }}
                    </a>
                @endauth
            </div>
        </nav>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @auth
                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Home') }}</a>
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
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
        </div>
    </div>
</nav>