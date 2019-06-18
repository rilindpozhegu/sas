<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="alrayan1">
<head>
    <title>Pharmacy View Controler</title>
    <meta charset="utf-8">
    <link rel="icon" href="http://www.clker.com/cliparts/9/P/E/q/D/M/blue-pharmacy-logo-md.png">
    <meta name="theme-color" content="#272F34" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-sanitize.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script  src="{{url('js/base.min.js')}}"></script>
    <script src="{{url('v4 bootstrap/bootstrap/bootstrap.min.js')}}"></script>
    <script  src="{{url('js/app.js')}}"></script>
    <script src="/js/notify.js"></script>
<script>
$(document).ready(function() {
    $('.example').DataTable();
} );
</script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="{{url('v4 bootstrap/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/build.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    
    @yield('title_and_meta')


</head>
<body ng-controller="HeaderCtrl" data-spy="scroll" data-target=".navbar" data-spy="affix">
<div class="header">
    @include('navbar.navbar')
</div>
<div>
    @yield('content')
</div>
@include('includes.footer')

</body>

</html>