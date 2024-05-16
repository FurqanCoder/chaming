<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charmin Glow Admin</title>
    
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/css/style.css')}}">
    <link rel="stylesheet" id="primaryColor" href="{{asset('dashboad/assets/css/orange-color.css')}}">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="dark-theme">
    @yield('content')
    <!-- main content start -->
   
    <!-- main content end -->
    
    <script src="{{asset('dashboad/assets/vendor/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/js/main.js')}}"></script>
</body>
</html>