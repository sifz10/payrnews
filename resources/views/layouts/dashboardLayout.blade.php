<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 05:59:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

@if (\Request::is('dashboard'))
  <title>Payrnews :-: Dashboard</title>
 @endif
@if (\Request::is('createPost'))
  <title>Payrnews :-: Create Post</title>
 @endif
@if (\Request::is('users'))
  <title>Payrnews :-: All Users</title>
 @endif
@if (\Request::is('pendingPost'))
  <title>Payrnews :-: Pending Post</title>
 @endif
<!-- Favicon-->
<link rel="icon" href="{!! asset('dashboardAsset') !!}/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{!! asset('dashboardAsset') !!}/assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="{!! asset('dashboardAsset') !!}/assets/css/main.css">
<link rel="stylesheet" href="{!! asset('dashboardAsset') !!}/assets/css/color_skins.css">
</head>
<body class="theme-black">
  @php
  $user = Auth()->user();
  $PendingStatus = DB::table('posts')->where('status',0)->count();
  @endphp
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{!! asset('dashboardAsset') !!}/assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">
                                <li><a href="image-gallery.html">Image Gallery</a> </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                    <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html"><img src="{!! asset('dashboardAsset') !!}/assets/images/logo.svg" alt="Alpino"></a>
        </li>
        <li><a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="notifications badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-notifications"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="{{ route('logout') }}" class="mega-menu" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File Manager</span></a></li>
                        <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="notif-menu">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>Messages</strong></h2>
                </div>
                <div class="body">
                    <ul class="messages list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="time">35min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="time">1hr ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="time">31min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Notifications</strong></h2>
                </div>
                <div class="body">
                    <ul class="notification list-unstyled">
                        <li>
                            <i class="zmdi zmdi-balance-wallet text-success"></i>
                            <strong>+$30 New sale</strong>
                            <p><a href="javascript:void(0)">Admin Template</a></p>
                            <small class="text-muted">7 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-edit text-info"></i>
                            <strong>You Edited file</strong>
                            <p><a href="javascript:void(0)">Docs.doc</a></p>
                            <small class="text-muted">15 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-delete text-danger"></i>
                            <strong>Project removed</strong>
                            <p><a href="javascript:void(0)">AdminX BS4</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-account text-success"></i>
                            <strong>New user</strong>
                            <p><a href="javascript:void(0)">UI Designer</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-flag text-warning"></i>
                            <strong>Alpino v1.0.0 is available</strong>
                            <p><a href="javascript:void(0)">Update now</a></p>
                            <small class="text-muted">5 hours ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                            <li><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Recent</strong> Activity Feed</h2>
                    </div>
                    <div class="body">
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">12:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">2 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">4 Week ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">5 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">5 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 Month ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="{!! route('dashboard') !!}"><img src="{!! asset('dashboardAsset') !!}/assets/images/profile_av.jpg" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>{{ $user->name }}</h6>
                            <p class="m-b-0">{{ $user->email }}</p>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-facebook-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-linkedin-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter-box"></i></a>
                        </div>
                    </div>
                </li>
                <li class="header">MAIN</li>
                <li> <a href="{!! route('dashboard') !!}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                @if ($user->role == 2)
                  <li><a href="{!! route('users') !!}" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Users List</span></a></li>
                  <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Create Moderator</span></a></li>
                  <li><a href="{!! route('pendingPost') !!}" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Pending Posts</span> @if (!empty($PendingStatus))<span class="badge badge-danger float-right">{{ $PendingStatus }}</span>@endif</a></li>
                  <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Pending Comments</span></a></li>
                  <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Pending Payments</span></a></li>
                @endif
                <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-us-dollar-50.png" alt="" width="25px;"><span>Earn Money</span></a>
                    <ul class="ml-menu">
                      <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/128.png" alt="" width="15px;"><span>Payrchat</span><span class="badge badge-success float-right">1</span></a>
                        <ul class="ml-menu">
                          <li><a href="#" class=" waves-effect waves-block facebook"><img src="{{ asset('fontendAsset') }}/images/pay_icons/128.png" alt="" width="10px;"><span>Payrchat Followers</span></a></li>
                        </ul>
                      </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-facebook-50.png" alt="" width="25px;"><span>Facebook</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class=" waves-effect waves-block facebook"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-facebook-50.png" alt="" width="20px;"><span>Facebook Followers</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block facebook"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-facebook-50.png" alt="" width="20px;"><span>Facebook Shares</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block facebook"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-facebook-50.png" alt="" width="20px;"><span>Facebook Comments</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block facebook"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-facebook-50.png" alt="" width="20px;"><span>Facebook Video</span></a></li>
                          </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-youtube-50.png" alt="" width="25px;"><span>Youtube</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class=" waves-effect waves-block youtube"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-youtube-50.png" alt="" width="20px;"><span>Youtube Likes</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block youtube"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-youtube-50.png" alt="" width="20px;"><span>Youtube Subscribers</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block youtube"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-youtube-50.png" alt="" width="20px;"><span>Youtube Comments</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block youtube"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-youtube-50.png" alt="" width="20px;"><span>Youtube Views</span></a></li>
                          </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-twitter-circled-50.png" alt="" width="25px;"><span>Twitter</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class=" waves-effect waves-block twitter"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-twitter-circled-50.png" alt="" width="20px;"><span>Twitter Followers</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block twitter"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-twitter-circled-50.png" alt="" width="20px;"><span>Twitter Retweets</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block twitter"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-twitter-circled-50.png" alt="" width="20px;"><span>Twitter Likes</span></a></li>
                          </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-instagram-old-50.png" alt="" width="25px;"><span>Instagram</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class=" waves-effect waves-block instagram"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-instagram-old-50.png" alt="" width="20px;"><span>Instagram Followers</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block instagram"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-instagram-old-50.png" alt="" width="20px;"><span>Instagram Likes</span></a></li>
                            <li><a href="#" class=" waves-effect waves-block instagram"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-instagram-old-50.png" alt="" width="20px;"><span>Instagram Comments</span></a></li>
                          </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-pinterest-50.png" alt="" width="25px;"><span>Pinterest</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class=" waves-effect waves-block pinterest"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-pinterest-50.png" alt="" width="20px;"><span>Pinterest Followers</span></a></li>
                          </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-tiktok-50.png" alt="" width="25px;"><span>TikTok</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class="menu-toggle waves-effect waves-block tiktok"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-tiktok-50.png" alt="" width="20px;"><span>TikTok Followers</span></a></li>
                            <li><a href="#" class="menu-toggle waves-effect waves-block tiktok"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-tiktok-50.png" alt="" width="20px;"><span>TikTok Likes</span></a></li>
                          </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-vk.com-50.png" alt="" width="25px;"><span>VKontakte</span></a>
                          <ul class="ml-menu">
                            <li><a href="#" class="menu-toggle waves-effect waves-block vk"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-vk.com-50.png" alt="" width="20px;"><span>VKontakte Followers</span></a></li>
                            <li><a href="#" class="menu-toggle waves-effect waves-block vk"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-vk.com-50.png" alt="" width="20px;"><span>VKontakte Joins</span></a></li>
                          </ul>
                        </li>
                        <li><a href="app-ticket.html" class=" waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-app-store-50.png" alt="" width="25px;"><span></span>App Download</a></li>
                        <li><a href="app-ticket.html" class=" waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-website-50.png" alt="" width="25px;"><span></span>Website Sign-Up</a></li>
                        <li><a href="app-ticket.html" class=" waves-effect waves-block"><img src="{{ asset('fontendAsset') }}/images/icons/ico/icons8-website-50.png" alt="" width="25px;"><span></span>Website Viewing</a></li>
                    </ul>
                </li>
                <li><a href="{!! route('createPost') !!}" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Create Blog</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>My Blog</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>My Balance</span></a></li>
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="{!! route('dashboard') !!}"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        @if (\Request::is('createPost'))
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Create Post</a></li>
                         @endif
                        @if (\Request::is('dashboard'))
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                         @endif
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
									                  <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{!! asset('dashboardAsset') !!}/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{!! asset('dashboardAsset') !!}/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="{!! asset('dashboardAsset') !!}/assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('.star').on('click', function () {
            $(this).toggleClass('star-checked');
        });

        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });
    });
</script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 05:59:25 GMT -->
</html>
