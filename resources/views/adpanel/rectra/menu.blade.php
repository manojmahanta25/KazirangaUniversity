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
                    <li class="dropdown d-none d-sm-block"><a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell"></i> @if(auth()->user()->unreadNotifications->count()>0)<span class="badge badge-xs badge-danger"></span>@endif</a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">{{auth()->user()->unreadNotifications->count()}}</span></li>
                            <li class="list-group">
                                @forelse(auth()->user()->unreadNotifications->take(3) as $row)
                                <!-- list item-->
                                <a href="{{route('admin.notificationRead',$row->id)}}" class="list-group-item">
                                    <div class="media">
                                        <div class="media-heading text-info">{{$row->data['data']}} By <b>{{$row->data['user']}}</b></div>
                                        <p class="m-0"><small>{{$row->data['task']}} </small></p>
                                        <p class="m-0"><small><b>{{(date('d-m-Y',strtotime($row->created_at))==date('d-m-Y',strtotime(\Carbon\Carbon::today()))) ? 'Today': $row->created_at->format('d M') }} </b> </small></p>
                                    </div>
                                </a>
                                @empty
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-heading">You got no New Notification</div>
                                                <p class="m-0"><small>^ ^</small></p>
                                            </div>
                                        </a>
                                @endforelse
                                <!-- list item-->

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
