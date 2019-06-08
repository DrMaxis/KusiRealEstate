<head>
    <meta charset="UTF-8">
    <title>@yield('title', app_name())</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="@yield('meta_description', 'Pacific North Properties')">
    <meta name="author" content="@yield('meta_author', 'Nathan Antwi')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    @yield('prescripts')

    
    <link
        href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:200,400,600,700,900,400italic,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/global/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('css/global/basetheme.css')}}">

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')
    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/frontend.css')) }}

    @stack('after-styles')
@yield('xcss')



</head>