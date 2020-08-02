<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/favicon.ico')}}">
    @include('layouts.head')
</head>
@yield('body')
@yield('content')
@include('layouts.vendor-scripts')
</html>