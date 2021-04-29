<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Autoroad - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="'https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet"  href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

  
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

  </head>
  <body>
	   <div class="the-nav">

        <div class="logos-zk">
            <!-- <img src="img/zk.png"> -->
            <a class="navbar-brand" href="#">voiture <span> d'or</span></a>
        </div>
        <div class="toggle-btn toggle" id="sidenav-toggle" data-toggle="offcanvas">
         <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
       




        <div class="auth-app">
            <div class="dropdown ">
                <i class="fa fa-user-circle dropdown-toggle" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                    <li><a><i class="fa fa-user" aria-hidden="true"></i>zakaria zoubir</a></li>
                    <li><a><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a> </li>
                </ul>
            </div>
        </div>

    </div>


    <!-- sidebar -->
    <aside class="main-sidebar">
        <nav class="navbar-primary">
            <ul class="navbar-primary-menu" id="myDIV">
                <li class="marg-padd">


                   <div class="fawnt active"><i class="fa fa-home" aria-hidden="true"></i><span class="nav-label">Dashbord</span> </div>

                    <div class="fawnt " data-toggle="collapse" data-target="#demo"><i class="fa fa-location-arrow" aria-hidden="true"></i><span class="nav-label">Agences</span> <i class="fa fa-angle-down angle" aria-hidden="true"></i></div>
                    <div id="demo" class="collapse in bor-zk">
                        <ul>
                            <li><a href="{{url('/admin/agence/ajouteragence')}}"><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter Agences</a></li>
                            <li><a href="{{url('/admin/agence/afficheagence')}}"><i class="fa fa-cube" aria-hidden="true"></i> Nos Agences</a></li>
                        </ul>

                    </div>


                    <div class="fawnt" data-toggle="collapse" data-target="#demo1"><i class="fa fa-car"  aria-hidden="true"></i><span class="nav-label">Voiture</span><i class="fa fa-angle-down angle" aria-hidden="true"></i></div>
                    <div id="demo1" class="collapse in bor-zk">
                      
                      <ul>
                            <li><a href="{{url('/admin/voiture/ajoutervoiture')}}"><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter Voiture</a></li>
                            <li><a href="{{url('/admin/voiture/affichevoiture')}}"><i class="fa fa-cube" aria-hidden="true"></i></i> Nos Voiture</a></li>
                        </ul>
                    </div>

                      <div class="fawnt " data-toggle="collapse" data-target="#demo2"><i class="fa fa-cog" aria-hidden="true"></i></i><span class="nav-label">Services</span> <i class="fa fa-angle-down angle" aria-hidden="true"></i></div>
                    <div id="demo2" class="collapse in bor-zk">
                        <ul>
                            <li><a href=""><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter Services</a></li>
                            <li><a href=""><i class="fa fa-cube" aria-hidden="true"></i> Nos Services</a></li>
                        </ul>

                    </div>

                    <div class="fawnt " data-toggle="collapse" data-target="#demo3"><i class="fa fa-users" aria-hidden="true"></i></i></i><span class="nav-label">Utilisateurs</span> <i class="fa fa-angle-down angle" aria-hidden="true"></i></div>
                    <div id="demo3" class="collapse in bor-zk">
                        <ul>
                            <li><a href="{{url('/admin/user/ajouteruser')}}"><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter utilisateur</a></li>
                            <li><a href="{{url('/admin/user/afficheusers')}}"><i class="fa fa-cube" aria-hidden="true"></i> utilisateurs</a></li>
                        </ul>

                    </div> 
                    <div class="fawnt "><a style="color: #adb6be;" href="{{url('/admin/Reserv/boitereservation')}}"><i class="fa fa-envelope" aria-hidden="true"></i></i><span class="nav-label">Boite Réservation</span></a> </div>

                     <div class="fawnt "><a style="color: #adb6be;" href="{{url('index')}}"><i class="fa fa-eye" aria-hidden="true"></i><span class="nav-label">Voir le site</span></a> </div>




                    </div>

                </li>
            </ul>
        </nav>

    </aside>
    <!-- /Fin sidebar -->
	<!-- /Fin sidebar -->

    
        @yield('content')
   

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  


</body>

</html>