@extends('root.root-bootstrap')
<?php
\Carbon\Carbon::setLocale('id');
/** @var \Illuminate\Session\Store $session */
$session = \Illuminate\Support\Facades\Session::getFacadeRoot();
$flashdata = ['notify' => []];
if (isset($errors))
{
    $flashdata['notify'] = array_merge($flashdata['notify'], $errors->all());
}
if (!is_null($session->get('cbk_msg')))
{
    $flashdata = array_merge($flashdata, $session->get('cbk_msg'));
}
?>

@section('head-css-pre')
    @parent
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{asset('/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    {{-- Ionicons --}}
    <link rel="stylesheet" href="{{asset('/assets/vendor/ionicons/dist/css/ionicons.min.css')}}">
    {{-- NProgress --}}
    <link rel="stylesheet" href="{{asset('/assets/vendor/nprogress/nprogress.min.css')}}">
    {{-- Adminlte --}}
    @yield('adminlte-style-addon')
    <link rel="stylesheet" href="{{asset('/assets/vendor/admin-lte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/admin-lte/dist/css/skins/skin-black-light.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/common/common-style.min.css')}}">
@endsection

@section('body-js-lower-pre')
    @parent
    {{-- SlimScroll --}}
    <script type="text/javascript" src="{{asset('/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    {{-- FastClick --}}
    <script type="text/javascript" src="{{asset('/assets/vendor/fastclick/lib/fastclick.min.js')}}"></script>
    {{-- NProgress --}}
    <script type="text/javascript" src="{{asset('/assets/vendor/nprogress/nprogress.min.js')}}"></script>
    {{-- Notify --}}
    <script type="text/javascript" src="{{asset('/assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    {{-- Adminlte --}}
    <script type="text/javascript">
        {!! 'var sessionFlashdata = ' . json_encode($flashdata)!!}
    </script>
    <script type="text/javascript" src="{{asset('/assets/vendor/admin-lte/dist/js/adminlte.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/common/common_function.min.js')}}"></script>
@endsection
