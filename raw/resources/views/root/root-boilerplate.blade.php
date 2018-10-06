@extends('root.root')

@section('head-property')
    {{-- Tell the browser to be responsive to screen width --}}
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" name="viewport">

    {{-- Favicon--}}
    <link rel="manifest" href="{{asset('/manifest.min.json')}}">
    <link rel="apple-touch-icon" href="{{asset('/icon.png')}}">
@endsection

@section('head-css-pre')
    <link rel="stylesheet" href="{{asset('/assets/css/app.min.css')}}">
@endsection

@section('head-js-post')
    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('/assets/vendor/html5shiv/dist/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/vendor/respond.js/dest/respond.min.js')}}"></script>
    <![endif]-->
    @endsection

@section('body-upgrade-browser')
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an
        <strong>outdated</strong>
                              browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a>
                              to improve your experience and security.
    </p>
    <![endif]-->
@endsection

@section('body-js-lower-pre')
    <script type="text/javascript" src="{{asset('/assets/js/app.min.js')}}"></script>
@endsection
