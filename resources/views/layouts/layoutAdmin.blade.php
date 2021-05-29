<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voiture d'or</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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
   
      

     
            @yield('content')
       

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
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('./plugins/sweetalert/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('./plugins/sweetalert/js/sweetalert.init.js')}}"></script>

    <script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
          
</body>
</html>