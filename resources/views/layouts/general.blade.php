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
        <script src="{{ asset('js/expanding.js')}}" defer></script>
        <script src="{{ asset('js/starrr.js')}}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{asset('css/helper.css')}}" rel="stylesheet">
        <!-- additional semantic  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js" defer></script>
        <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {

          // Get all "navbar-burger" elements
          const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

          // Check if there are any navbar burgers
          if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
              el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

              });
            });
          }

        });
        	$(document)
        	.ready(function(){
        		$(".rating").rating();
        	});


        </script>
</head>
<body>
    <div id="app">
        <nav class="navbar is-transparent is-light">
            <div class="container is-fluid">
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
        <!-- this are is navigation bar or menu bar  -->
        <div class="container is-fluied">
        <nav class="navbar is-white navbar-custom">
          <div class="nav-brand">
            <a class="logo"href="{{ url('') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Bulma: a modern CSS framework based on Flexbox" class="logo">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="navbar-menu" id="navbarExampleTransparentExample" >
            <div class="navbar-end">
              <a href="{{url('/home')}}" class="navbar-item"><strong>Home</strong></a>
              <a href="{{url('/aboutus')}}" class="navbar-item"><strong>About</strong></a>
              <a href="{{route('service.index')}}" class="navbar-item"><strong> Service list </strong> </a>
              <div class="navbar-item">
                <p class=" control has-icons-left" action="#" method="post">
                  <input class="input is-large" type="text" name="" value="" placeholder="insert a medical service">
                  <span class="icon is-large is-left">
                    <i class="fas fa-search"></i>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </nav>
        <hr>
        </div>

        <main class="py-4">
            @yield('content')
            @yield('styles')
            @yield('scripts')
            </script>
        </main>
    </div>
    <div class="section">
      <footer class="footer">
      <div class="content has-text-centered">
        <p>
         Designed  by <a href="https://github.com/huynguyen18595">Steve Nguyen</a>.
        </p>
      </div>
    </footer>

    </div>
</body>
</html>
