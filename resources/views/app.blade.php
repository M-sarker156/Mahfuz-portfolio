<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Mahfuz</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('/favicon.ico') }}" />
    <link href="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset ('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/axios.min.js') }}"></script>
</head>
<body>
 
@include('components.navbar')

@include('components.loader')

<div class="" id="content-div">
    @yield('content')
</div>

@include('components.footer')

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>