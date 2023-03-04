<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All in Time</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg  bg-light rounded fixed-top nav" aria-label="Fourth navbar example">
            <div class="container ">
                <a class="navbar-brand logo" href="#">All in time </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        
                    </ul>
                    <li class="nav-item li">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item active" >
                                        <a class="nav-link conn" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item ">
                                        <a class="nav-link reg" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
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
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield("content")
    </main>
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
