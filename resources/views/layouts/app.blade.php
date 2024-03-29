<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
    <title>{{ $title or "Meeting Needs" }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    @yield('head_extra')
    @if(Auth::check())
        <meta name="_token" content="{{ csrf_token() }}" />
    @endif
</head>
<body style="height:100%;">
    <div class="wrapper">
        <div class="banner-filler" style="background-image: url('{{ isset($banner) ? asset($banner): asset('images/banner.jpg') }}');"></div>
        <!--Index navigation bar-->
        @include('templates.navbar')
        <div class="content">
            @yield('content')
        </div>
        <!--Default footer-->
        @include('templates.footer')
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('script_extra')
</body>
</html>
