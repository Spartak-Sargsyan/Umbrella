<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" />
    <!-- aos css -->
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
    <title>DX</title>
</head>
<body>
@include('frontend.layouts.header')
<main>
    @yield('content')
</main>



@include('frontend.layouts.footer')



<script src="{{asset('frontend/js/aos.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
