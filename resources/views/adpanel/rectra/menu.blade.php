<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center"><a href="./" class="logo"><span>KU</span>Panel</a> <a href="./" class="logo-sm"><span>KU</span></a>
                <!--<a href="./" class="logo"><img src="adpanel/images/logo_white_2.png" height="28"></a>-->
                <!--<a href="./" class="logo-sm"><img src="adpanel/images/logo_sm.png" height="36"></a>--></div>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect"><i class="mdi mdi-menu"></i></button>
                    </li>
                    <li class="hide-phone app-search float-left">
                        <form role="search" class="navbar-form">
                            <input type="text" placeholder="Search..." class="form-control search-bar"> <a href="#"><i class="fa fa-search"></i></a></form>
                    </li>
                </ul>
                <ul class="nav navbar-right float-right list-inline">
                    <li class="dropdown d-none d-sm-block"><a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span></a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                            <li class="list-group">
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-heading">Your order is placed</div>
                                        <p class="m-0"><small>Dummy text of the printing and typesetting industry.</small></p>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-body clearfix">
                                            <div class="media-heading">New Message received</div>
                                            <p class="m-0"><small>You have 87 unread messages</small></p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Your item is shipped.</div>
                                            <p class="m-0"><small>It is a long established fact that a reader will</small></p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item --><a href="javascript:void(0);" class="list-group-item"><small class="text-primary">See all notifications</small></a></li>

                        </ul>
                    </li>
                    <li class="d-none d-sm-block"><a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="mdi mdi-fullscreen"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{ URL::asset('adpanel/images/users/avatar-1.jpg') }}" alt="user-img" class="rounded-circle"> <span class="profile-username">{{ Auth::user()->name }}<br><small>Developer</small></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" class="dropdown-item">Profile</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-success float-right">5</span> Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item">Lock screen</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="./signout" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Top Bar End -->
