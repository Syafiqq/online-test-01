@extends('root.root-adminlte')

@section('head-css-post')
    @parent
    <link rel="stylesheet" href="{{asset('/assets/css/shared/adminlte/default_adminlte_starter.min.css')}}">
@endsection
@section('head-js-pre')
    @parent
    <script type="text/javascript" src="{{asset('/assets/vendor/js-cookie/src/js.cookie.min.js')}}"></script>
@endsection
@section('body-js-upper-pre')
    @parent
    <script type="text/javascript" src="{{asset('/assets/js/shared/adminlte/nav-toggler-navigation.min.js')}}"></script>
@endsection
@section('body-js-lower-post')
    @parent
    <script type="text/javascript" src="{{asset('/assets/js/shared/adminlte/default_adminlte_starter.min.js')}}"></script>
@endsection

@section('adminlte-navbar')
    @include('/shared/navbar/default_navbar')
@endsection
@section('adminlte-sidebar')
    @include('/shared/sidebar/default_sidebar')
@endsection

@section('adminlte-footer')
    @include('/shared/footer/default_footer')
@endsection

@section('body-content')
    <div class="wrapper">
        @yield('adminlte-navbar')
        @yield('adminlte-sidebar')
        @yield('adminlte-content')
        @yield('adminlte-footer')
    </div>
@endsection

@section('body-property')
    <body class="hold-transition skin-black-light sidebar-mini">
@endsection
