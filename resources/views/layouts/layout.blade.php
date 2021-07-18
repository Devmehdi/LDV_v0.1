<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma voiture | Accueil</title>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap')}}" rel="stylesheet">

    <link rel="{{asset('stylesheet" href="css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" style="background-color: black !important" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"> <span> Ma</span> Voiture</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-menu menu-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{url('index')}}" class="nav-link">Accueil</a></li>
              <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">A Propos</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('agence/liste')}}">Nos Agences</a>
              <li class="nav-item"><a href="{{url('liste')}}" class="nav-link">Nos Voitures</a></li>
              <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
              <div class="d-bloc d-sm-none">
              @if (Auth::user())
              <li class="nav-item" > <a style="color:#fff;font-weight:bold;padding: 5px 0;font-size: 15px;"  class="nav-link" href="{{ route('profil') }}">
                   {{ Auth::user()->username }} (mon compte)
                   </a>
                   </li>
                   @if (Auth::user()->role_id==1)
                   <li class="nav-item" > <a style="color:#fff;font-weight:bold;padding: 5px 0;font-size: 15px;" href="{{url('/dashboard')}}" class="nav-link">Dashbord</a></li>
                  @endif
                  <li class="nav-item" ><a style="color:#fff;font-weight:bold;padding: 5px 0;font-size: 15px;" class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endif
                    </div>
              
              <!-- @if (Auth::user())
               
               @endif -->
               <!-- <div class="d-none d-sm-block"> -->
              @if (Auth::user())
              <li class="nav-item dropdown d-none d-sm-block " style="color:#fff">
                <a id="navbarDropdown" class="nav-link dropdown-toggle r-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   
                <i style="color:#fff" class="icon-user-o menu-icon"></i>   
                   
                </a>
                

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a  class="dropdown-item" href="{{ route('profil') }}">
                   {{ Auth::user()->username }}
                   </a>
                   @if (Auth::user()->role_id==1)
                   <a href="{{url('/dashboard')}}" class="dropdown-item">Dashbord</a>
                  @endif
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
           
              @else
              <li class="nav-item "><a href="{{url('register')}}" class="nav-link btn-insc btn-zk">Inscription</a></li>
              <li class="nav-item "><a href="{{url('login')}}" class="nav-link btn-conect btn-zk">Se connectez</a></li>
              @endif
           <!-- </div> -->
            </ul>
          </div>
        </div>
      </nav>
    
       @yield('contenu')
    


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> Dévloppé by Zoubir Zakaria & Mehdi Elyasmine & Youssef Elhilali & Fatima zahra Elfaik
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>

      
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
      <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('js/aos.js')}}"></script>
      <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
      <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
      <script src="{{asset('js/scrollax.min.js')}}"></script>
      <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
      <script src="{{asset('js/google-map.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
</body>
</html>