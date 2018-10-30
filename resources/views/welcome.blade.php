<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-ui.js') }}" defer></script>
        <script src="{{ asset('js/jquery.js') }}" ></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{asset('css/helper.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/images/background.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .contain-top{
              margin-top: 150px;
              color: grey;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container is-fluied">
            @if (Route::has('login'))
              <div class="navbar is-light">
                <div class=" top-right links">
                    @auth

                        <a href="#" class="button is-outlined" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                        </a>
                        <a class="button is-info is-outlined" href="{{ url('/logout') }}">
                          <span>
                            <i class="fas fa-sign-out-alt"></i>
                          </span>
                          <span>
                            Logout
                          </span>
                        </a>

                    @else
                        <a class="button is-info is-outlined" href="{{route('login')}}"> <!--this is login button -->
                          <span class="icon">
                            <i class="fas fa-sign-in-alt"></i>
                          </span>
                          <span>
                            Login
                          </span>
                        </a>
                        <a class="button is-info is-outlined" href="{{route('register')}}">
                          <span class="icon">
                            <i class="fas fa-user-plus"></i>
                          </span>
                          <span>Sign up</span>
                        </a>
                    @endauth
                </div>

              </div>
            @endif

        </div>
          <section class="section">
    <div class="container contain-top">
      <h2 class="title">High Five Health</h2>
      <h2 class="subtitle">
        Is a web application aimed to provide a platform for patients <br>
        to rate their health service across all Healthcare platforms and <br>
        encourge them to leave <strong>feedback</strong> towards the health services <br>
        they have experienced.
      </h2>
      <a href="{{asset('/home')}}" class="button is-dark is-outlined"> To Home</a>
    </div>
  </section>

    </body>
</html>
