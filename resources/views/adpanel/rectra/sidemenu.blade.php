<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center"><img src="{{ URL::asset('adpanel/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle"></div>
            <div class="user-info">
                <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)" class="dropdown-item">Profile</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-success float-right">5</span> Settings</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item">Lock screen</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="javascript:void(0)" class="dropdown-item">Logout</a></li>
                    </ul>
                </div>
                <p class="text-muted m-0"><i class="far fa-dot-circle text-primary"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li><a href="./" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-primary float-right">1</span></span></a></li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span>Faculty</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.addFaculty')}}">Add Faculty</a></li>
                        <li><a href="{{route('admin.Faculty')}}">Faculty</a></li>
                        <li><a href="{{route('admin.priorityFaculty')}}">Priority</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-opacity"></i><span>Essential</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.School')}}">School</a></li>
                        <li><a href="{{route('admin.Dept')}}">Department</a></li>
                        <li><a href="{{route('admin.Desig')}}">Designation</a></li>
                        <li><a href="{{route('admin.Cl')}}">Collaboration</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Conf/Sem/Wokshp</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-material.html">Add New</a></li>
                        <li><a href="icons-ion.html">Details</a></li>
                        <li><a href="icons-fontawesome.html">Approve</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table"></i><span>Placement</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-material.html">Add New</a></li>
                        <li><a href="icons-ion.html">Details</a></li>
                        <li><a href="icons-fontawesome.html">Approve</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-pie"></i><span>Notice</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-material.html">Add New</a></li>
                        <li><a href="icons-ion.html">Details</a></li>
                        <li><a href="icons-fontawesome.html">Approve</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map"></i><span> In Press </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-material.html">Add New</a></li>
                        <li><a href="icons-ion.html">Details</a></li>
                        <li><a href="icons-fontawesome.html">Approve</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-assistant"></i><span> Footprints </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-material.html">Add New</a></li>
                        <li><a href="icons-ion.html">Details</a></li>
                        <li><a href="icons-fontawesome.html">Approve</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-directory.html">Directory</a></li>
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-blank.html">Blank Page</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->


