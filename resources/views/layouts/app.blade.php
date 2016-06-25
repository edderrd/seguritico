<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}">

    <title>Seguritico</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body id="app-layout">
    @include('layouts/partials/main-navigation')
    @section('breadcrumb')
        @include('layouts/partials/breadcrumbs')
    @show
    @include('layouts/partials/flash')
    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ elixir('js/bundle.js') }}"></script>
</body>
</html>
