<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','laravel')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    </head>
    <body>
        @include('inc.nav')
        @include('inc.error')
        @include('inc.message')
        <div class="container">
            @yield('content')
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
           CKEDITOR.replace( 'body-ckeditor' );
        </script>
    </body>
    
</html>