{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">

  <a class="navbar-brand mb-0 h1" href="/"><b>1999</b></a>

  <div class="collapse navbar-collapse flex-row-reverse">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/posts">Posts</a>
        </li>
        <li class="nav-item " >
            <a class="nav-link" href="/posts/create">Create Post</a>
        </li>
    </ul>
  </div>
</nav> --}}


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'O.M.D') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link my-nav-link" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
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
