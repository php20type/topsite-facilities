<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | Topesite Facilities</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{URL::asset('img/logo/fevicon.png')}}" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

 <!-- JavaScript Library -->
 <script src="{{URL::asset('js/jquery.min.js')}}"></script>

 <!-- Popper JS and Bootstrap JS -->
 <script src="{{URL::asset('js/bootstrap.bundle.js')}}"></script>
 <script src="{{URL::asset('js/popper.min.js')}}"></script>
 <script src="{{URL::asset('js/custom.js')}}"></script>

</html>
