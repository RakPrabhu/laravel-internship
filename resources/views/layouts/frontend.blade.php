<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap5.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">


       
    </head>
    <body>
        <div>
           @section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection 
</div>
<script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap5.bundle.js')}}"></script>
    </body>
</html>
