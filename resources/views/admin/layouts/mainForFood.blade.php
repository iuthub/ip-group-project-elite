<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Giardino backend</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet"> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
            <a class="navbar-brand" href="#">Giardino Backend</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active pl-5">
                  <a class="nav-link" href="#">Reservations<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="{{ route('foodIndex')}}">Food</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div>
            {{-- loginlogout --}}
            <!--Dropdown primary-->
              <div class="dropdown">

                <a href="{{ route('createNewFood')}}"><button class="btn btn-default" type="button">Create Food</button></a>
                <!--Trigger-->
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</button>


                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </div>
              <!--/Dropdown primary-->
          </nav>
          @if(Session::has('info'))
          <div class="row justify-content-md-center">
              <div class="alert alert-info">
                  {{ Session::get('info') }}
              </div>
          </div>
          @endif
        <main class="py-4">
          
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
        <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</body>
</html>
