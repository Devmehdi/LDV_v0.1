<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma voiture | Accueil</title>
    <link rel="icon" type="image/png" sizes="64x64" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Custom Stylesheet -->
    <link href="{{asset('./plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('./plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('./plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('./icons/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('./icons/material-design-iconic-font/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <link href="{{asset('css/css/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/sweetalert/css/sweetalert.css')}}" rel="stylesheet">
</head>
<body>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{url('dashboard')}}">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <a class="navbar-brand" href="{{url('index')}}"> <span> </span></a>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    
                </div>
                <div class="header-right" id="notif">
                    <ul class="clearfix">
                        
                        <notification-component></notification-component>

                        <li class="icons dropdown">
                            <a href="#" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{url('images/user/1.png')}}" height="40" width="40" alt="">
                                <div>
                                        <span class="badge badge-pill gradient-2 badge-primary"></span>
                                </div>
                            </a>
                            <div class=" dropdown-menu " aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{url('/admin/profil')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                       <li>
                                            <a class="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                               <i class="icon-logout"></i> <span>Logout</span>
                                            </a>
                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            
                            </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    @if (Auth::user()->role_id==1)
                    <li>
                        <a class="has-arrow" href="{{url('/dashboard')}}" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-map menu-icon"></i><span class="nav-text">Agence</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/agence/ajouteragence')}}">Nouvelle Agence</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            <li><a href="{{url('/admin/agence/afficheagence')}}">Nos Agences</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-star menu-icon"></i><span class="nav-text">Voiture</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/voiture/ajoutervoiture')}}">Nouvelle Voiture</a></li>
                            <li><a href="{{url('/admin/voiture/affichevoiture')}}">Nos Voitures</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-people menu-icon"></i><span class="nav-text">Utilisateur</span>
                        </a>
                        
                        <ul aria-expanded="false">
                            
                            <li><a href="{{url('/admin/user/ajouteruser')}}">Nouvelle Utilisateur</a></li>
                            <li><a href="{{url('/admin/user/afficheusers')}}">Nos Utilisateurs</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>

                    </li>
                    
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i><span class="nav-text">Boite Réservation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/Reserv/boitereservation')}}">Liste des réservations</a></li>
                            <li><a href="{{url('/admin/Reserv/boitereservation/demandeconfirmer')}}">Les demandes confirmé</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li style="position: absolute;bottom: 0;width: 100%">
                        <a class="has-arrow" href="{{url('/')}}" aria-expanded="false">
                            <i class="icon-eye menu-icon"></i><span class="nav-text"> Voir site web</span>
                        </a>
                    </li>     
                    @else
                    <li>
                        <a class="has-arrow" href="{{url('/dashboard')}}" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-map menu-icon"></i><span class="nav-text">Agence</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/agence/ajouteragence')}}">Nouvelle Agence</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            <li><a href="{{url('/admin/agence/afficheagence')}}">Nos Agences</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-star menu-icon"></i><span class="nav-text">Voiture</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/voiture/ajoutervoiture')}}">Nouvelle Voiture</a></li>
                            <li><a href="{{url('/admin/voiture/affichevoiture')}}">Nos Voitures</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                  
                    
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i><span class="nav-text">Boite Réservation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/Reserv/boitereservation')}}">Liste des réservations</a></li>
                            <li><a href="{{url('/admin/Reserv/boitereservation/demandeconfirmer')}}">Les demandes confirmé</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li style="position: absolute;bottom: 0;width: 100%">
                        <a class="has-arrow" href="{{url('index')}}" aria-expanded="false">
                            <i class="icon-eye menu-icon"></i><span class="nav-text"> Voir site web</span>
                        </a>
                    </li>
                    @endif
                   
                </ul>
                   
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
     
            @yield('content')
       
        <!--**********************************
            Content body end
        ***********************************-->
    
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script src="{{asset('plugins/common/common.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/gleek.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>
  <!-- Chartjs -->
  <script src="{{asset('plugins/chart.js/Chart.bundle.min.js')}}"></script>
  <!-- Circle progress -->
  <script src="{{asset('plugins/circle-progress/circle-progress.min.js')}}"></script>
  <!-- Datamap -->
  <script src="{{asset('plugins/d3v3/index.js')}}"></script>
  <script src="{{asset('plugins/topojson/topojson.min.js')}}"></script>
  <script src="{{asset('plugins/datamaps/datamaps.world.min.js')}}"></script>
  <!-- Morrisjs -->
  <script src="{{asset('./plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('./plugins/morris/morris.min.js')}}"></script>
  <!-- Pignose Calender -->
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
  <!-- ChartistJS -->
  <script src="{{asset('plugins/chartist/js/chartist.min.js')}}"></script>
  <script src="{{asset('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('./plugins/sweetalert/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('./plugins/sweetalert/js/sweetalert.init.js')}}"></script>

    <script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
          
</body>
</html>