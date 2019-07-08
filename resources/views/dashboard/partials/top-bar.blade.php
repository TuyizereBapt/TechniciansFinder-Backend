<!-- TOP BAR -->
<div class="top-bar navbar-fixed-top">
    <div class="container">
        <div class="clearfix">
            <a href="javascript:void(0)" class="pull-left toggle-sidebar-collapse">
                <i class="fa fa-bars"></i>
            </a>
            <!-- logo -->
            <div class="pull-left left logo">
                <a href="javascript:void(0)">
                    {{--<img height="40" src="{{asset('assets/logo_480.png')}}" alt="KingAdmin - Admin Dashboard"/>--}}
                    TechniciansFinder Dashboard
                </a>
                <h1>TechniciansFinder Dashboard</h1>
            </div>
            <!-- end logo -->
            <div class="pull-right right">
                <!-- top-bar-right -->
                <div class="top-bar-right">
                    <!-- logged user and the menu -->
                    <div class="logged-user">
                        <div class="btn-group">
                            <a href="#" class="btn btn-link dropdown-toggle"
                               data-toggle="dropdown">
                                <img src="{{asset('assets/img/user-avatar.png')}}" alt="User Avatar"/>
                                <span class="name">Bapt</span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                        <span class="text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-power-off"></i>
                                        <span class="text">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end logged user and the menu -->
                </div>
                <!-- end top-bar-right -->
            </div>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- END TOP BAR -->