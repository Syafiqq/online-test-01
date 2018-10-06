{{----}}
{{-- This <diraja-malaysia> project created by : --}}
{{-- Name         : syafiq --}}
{{-- Date / Time  : 20 September 2018, 10:42 PM. --}}
{{-- Email        : syafiq.rezpector@gmail.com --}}
{{-- Github       : syafiqq --}}
{{----}}
<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>-</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>JKDM</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a>
                        <b>TAX STAMP SYSTEM</b>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if(\Illuminate\Support\Facades\Session::has('user'))
                    <form id="do-sign-out" action="{{route('auth.logout')}}" method="post">
                        @csrf
                    </form>
                    <li class="active">
                        <a id="sign-out" href="javascript:void(0)">
                            <b>Signout</b>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
