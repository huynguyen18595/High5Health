<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
        <script src="{{ asset('js/jquery.js') }}" ></script>
        <script src="{{ asset('js/homepage.js')}}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{asset('css/helper.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar is-transparent is-light">
            <div class="container is-fluid">
              <div class="navbar-brand">
                <a class="logo" href="{{ url('') }}">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="Bulma: a modern CSS framework based on Flexbox" class="logo">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <!-- Authentication Links -->
              @guest
              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="field is-grouped">
                    <p class="control">
                      <a class="button is-info is-outlined" href="{{route('login')}}"> <!--this is login button -->
                        <span class="icon">
                          <i class="fas fa-sign-in-alt"></i>
                        </span>
                        <span>
                          Login
                        </span>
                      </a>
                    </p>
                    <p class="control">
                      <a class="button is-info is-outlined" href="{{route('register')}}">
                        <span class="icon">
                          <i class="fas fa-user-plus"></i>
                        </span>
                        <span>Sign up</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              @else
              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="field is-grouped">
                    <p class="control">
                      <a href="#" class="button is-outlined" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                      </a>
                    </p>
                    <p class="control">
                      <a class="button is-info is-outlined" href="{{ url('/logout') }}">
                        <span>
                          <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span>
                          Logout
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              @endguest
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
