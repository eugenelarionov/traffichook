<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Styles -->
    <link href="https://mobilekit.bragherstudio.com/view9/assets/css/style.css" rel="stylesheet">

    <meta name="theme-color" content="#1E74FD">

</head>
<!-- style="background: #edeef0;" -->
<body class="bg-light">
    <div id="app">
        @yield('content')    
    </div>
    
</body>
</html>




