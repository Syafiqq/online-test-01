{{----}}
{{-- This <diraja-malaysia> project created by : --}}
{{-- Name         : syafiq --}}
{{-- Date / Time  : 20 September 2018, 10:40 PM. --}}
{{-- Email        : syafiq.rezpector@gmail.com --}}
{{-- Github       : syafiqq --}}
{{----}}
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/assets/img/common/kastam.png')}}" alt="User Image">
            </div>
        </div>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">&nbsp</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview active">
                <a href="javascript:void(0)">
                    <i class="fa fa-money"></i>
                    <span>ORDERING</span>
                    <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{($sidebar_menu['ordering'] ?? null) == 'create' ? 'active' : ''}}">
                        <a href="{{route('ordering.create')}}">Create Order</a>
                    </li>
                    <li class="{{($sidebar_menu['ordering'] ?? null) == 'manage' ? 'active' : ''}}">
                        <a href="{{route('ordering.manage')}}">Manage Orders</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="fa fa-link"></i>
                    <span>TRACK & TRACE</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="fa fa-link"></i>
                    <span>DIGITAL ACTIVATION <br>SYSTEM</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
