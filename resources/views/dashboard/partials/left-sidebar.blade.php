<!-- LEFT SIDEBAR -->
<div id="left-sidebar" class="left-sidebar ">
    <!-- main-nav -->
    <div class="sidebar-scroll">
        <nav class="main-nav">
            <ul class="main-menu">
                <li class="active">
                    <a href="{{route('dashboard')}}" class="js-sub-menu-toggle">
                        <i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="text">Notifications <span class="badge red-bg">5</span></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="js-sub-menu-toggle">
                        <i class="fa fa-group"></i><span class="text">Technicians</span>
                        <i class="toggle-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu ">
                        <li>
                            <a href="{{route('dashboard.technicians')}}">
                               <i class="fa fa-eye"></i> <span class="text">View List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.technicians.map')}}">
                                <i class="fa fa-map"></i> <span class="text">Map</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.newTechnician')}}">
                              <i class="fa fa-plus"></i>  <span class="text">Add</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="js-sub-menu-toggle">
                        <i class="fa fa-hand-grab-o"></i><span class="text">My Work</span>
                        <i class="toggle-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu ">
                        <li>
                            <a href="{{route('dashboard.postWork')}}">
                                <i class="fa fa-plus"></i> <span class="text">Post New</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.newTechnician')}}">
                                <i class="fa fa-eye"></i>  <span class="text">All Posted</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /main-nav -->
    </div>
</div>
<!-- END LEFT SIDEBAR -->