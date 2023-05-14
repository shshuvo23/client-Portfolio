<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apez Admin Template | Dashboard</title>
    <link rel="icon" type="{{ asset('/') }}admin/image/x-icon" href="{{ asset('/') }}admin/images/">
    <!-- Switcher CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/plugin/switchery/switchery.min.css" />
    <!-- Morris CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/plugin/morris/morris.css" />
    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/plugin/dropzone/dropzone.min.css" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/dist/css/style.css" />
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader spinner-3">
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
        </div>
    </div>

    <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed">
            <!-- Menu Wrapper -->
            <div class="menu-wrapper">
                <div class="menu">
                    <!-- Menu Container -->
                    <ul>
                        <li class="menu-title">Dashboard</li>
                        <li>
                            <a href="{{route('dashboard')}}"><i class="icon-wallet"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-title">Slide  Image</li>
                        <li>
                            <a href="{{route('Slider.addImage')}}"><i class="icon-wallet"></i><span>Add Slider Image</span></a>
                        </li>

                        <li class="menu-title">Profile Image</li>
                        <li>
                            <a href="{{route('pro.addImage')}}"><i class="icon-wallet"></i><span>Add Profile Image</span></a>
                        </li>

                        <li class="menu-title">Category</li>
                        <li>
                            <a href="{{route('category')}}"><i class="icon-wallet"></i><span>Add Category</span></a>
                        </li>
                        <li class="menu-title">Post</li>
                        <li>
                            <a href="{{route('post')}}"><i class="icon-wallet"></i><span>Add Post</span></a>
                        </li>
                        <li class="menu-title">Our Client</li>
                        <li>
                            <a href="{{route('client')}}"><i class="icon-wallet"></i><span>Add Client Logo</span></a>
                        </li>


                        <li class="has-sub">
                            <a><i class="icon-compass"></i><span>Menu Level</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a><span>Second Level</span></a>
                                </li>
                                <li class="has-sub">
                                    <a><span>Second Level Child</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a><span>Second Level Child</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page header -->
            <div class="page-hdr">
                <div class="row align-items-center">
                    <div class="col-4 col-md-7 page-hdr-left">
                        <!-- Logo Container -->
                        <div id="logo">
                            <div class="tbl-cell logo-icon">
                                <a href="#"><img src="images/icon.png" alt=""></a>
                            </div>
                            <div class="tbl-cell logo">
                                <a href="#"><img src="images/logo.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-md-5 page-hdr-right">
                        <div class="page-hdr-desktop">
                            <div class="page-menu menu-dropdown-wrapper menu-user">
                                <a class="user-link">
                                    <span class="tbl-cell user-name pr-3"> <span
                                            class="pl-2">{{ Auth::user()->name }}</span></span>
                                    <span class="tbl-cell avatar"><img src="uploads/author-4.jpg"
                                            alt=""></span>
                                </a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div>
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head pb-3">
                                            <div class="tbl-cell">
                                                <img src="uploads/author-1.jpg" alt="">
                                                <!-- <i class="fa fa-user-circle"></i> -->
                                            </div>
                                            <div class="tbl-cell pl-2 text-left">
                                                <p class="m-0 font-18">{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="menu-dropdown-body">
                                            <ul class="menu-nav">
                                                <li><a href="#"><i class="icon-user"></i><span>My
                                                            Profile</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-dropdown-footer text-right">
                                            <a href="#"
                                                class="btn btn-outline btn-primary btn-pill btn-outline-2x font-12 btn-sm"
                                                onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="page-menu menu-dropdown-wrapper menu-notification">
                                <a><i class="icon-bell"></i><span class="notification">20</span></a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div>
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head">Notification</div>
                                        <div class="menu-dropdown-body">
                                            <ul class="timeline m-0">
                                                <li>
                                                    <a href="#" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Wallet Adddes </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Coin Transferred from BTC<span
                                                                class="badge badge-danger badge-pill badge-sm">Unpaid</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">BTC bought</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Server Restarted <span
                                                                class="badge badge-success badge-pill badge-sm">Resolved</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">New order received</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-menu menu-dropdown-wrapper menu-quick-links">
                                <a><i class="icon-grid"></i></a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div>
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head">Quick Links</div>
                                        <div class="menu-dropdown-body p-0">
                                            <div class="row m-0 box">
                                                <div class="col-6 p-0 box">
                                                    <a href="#">
                                                        <i class="icon-emotsmile"></i>
                                                        <span>New Contact</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="#">
                                                        <i class="icon-docs"></i>
                                                        <span>New Invoice</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="#">
                                                        <i class="icon-calculator"></i>
                                                        <span>New Quote</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="#">
                                                        <i class="icon-rocket"></i>
                                                        <span>New Expense</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-menu">
                                <a class="open-sidebar-right"><i class="icon-settings"></i><span></span></a>
                            </div> --}}
                        </div>
                        <div class="page-hdr-mobile">
                            <div class="page-menu open-mobile-search">
                                <a href="#"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="page-menu open-left-menu">
                                <a href="#"><i class="icon-menu"></i></a>
                            </div>
                            <div class="page-menu oepn-page-menu-desktop">
                                <a href="#"><i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Page Wrapper -->
            @yield('body')

        </div>
        <!-- Sidebar Section -->
        <div class="sidebar sidebar-right">
            <div class="sidebar-close"><i class="icon-close"></i></div>
            <div class="content">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                    <li class="nav-item">
                        <a class="nav-link active" href="#sidebar-member" data-toggle="tab">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebar-setting" data-toggle="tab">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebar-log" data-toggle="tab">Logs</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="sidebar-member">
                        <div class="pl-2 pr-2">
                            <div class="box-title pb-3">Premium Member</div>
                            <div class="user-list br-bottom-1x pb-4">
                                <ul>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-1.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Steve Soren</a>
                                            <p>Lead Developer at Ipos.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#"
                                                class="btn btn-outline btn-info btn-pill btn-outline-1x btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-2.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Cheri Aria</a>
                                            <p>Photographer and Lead Designer.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#" class="btn btn-info btn-pill btn-sm">Following</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-3.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Daniel Barnes</a>
                                            <p>Manager at IT park.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#"
                                                class="btn btn-outline btn-info btn-pill btn-outline-1x btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-4.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Janet Collins</a>
                                            <p>Developer at atios.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#"
                                                class="btn btn-outline btn-info btn-pill btn-outline-1x btn-sm">Follow</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-title pt-3 pb-3">Users</div>
                            <div class="user-list">
                                <ul>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-1.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Steve Soren</a>
                                            <p>Lead Developer at Ipos.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-2.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Cheri Aria</a>
                                            <p>Photographer and Lead Designer.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-3.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Daniel Barnes</a>
                                            <p>Manager at IT park.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-4.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Janet Collins</a>
                                            <p>Developer at atios.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="sidebar-setting">
                        <div class="pl-2 pr-2">
                            <div class="box-title pb-3">General Setting</div>
                            <div class="setting-list">
                                <ul>
                                    <li class="item">
                                        <div class="label">Email Notifications</div>
                                        <div class="control"><input type="checkbox" checked class="js-switch"
                                                data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Comment auto Publish</div>
                                        <div class="control"><input type="checkbox" class="js-switch"
                                                data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Review Auto Publish</div>
                                        <div class="control"><input type="checkbox" checked class="js-switch"
                                                data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Post Setting</div>
                                        <div class="control"><input type="checkbox" class="js-switch"
                                                data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Cron Log</div>
                                        <div class="control"><input type="checkbox" class="js-switch"
                                                data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Email Log</div>
                                        <div class="control"><input type="checkbox" checked class="js-switch"
                                                data-color="#13dafe" /></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="sidebar-log">
                        <div class="pl-2 pr-2">
                            <div class="box-title pb-3">Server and Application Logs</div>
                            <ul class="timeline">
                                <li>
                                    <div class="time"><small>Just Now</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">21 new users registered </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>11 mins</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">New invoice generated <span
                                                class="badge badge-danger badge-pill badge-sm">Unpaid</span></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>15 mins</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">Cron Job Completed</div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>20 mins</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">Server Restarted <span
                                                class="badge badge-success badge-pill badge-sm">Resolved</span></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>25 mins</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">New order received</div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>30 mins</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">New ticket created <span
                                                class="badge badge-warning badge-pill badge-sm">High</span></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>35 mins</small></div>
                                    <a href="#" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">Payment Made by client $350.</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sidebar Section -->
         <!-- Page Footer -->
         <div class="page-ftr">
            <div>© 2018. Cryptoboard Admin Template by ManasaTheme</div>
        </div>
    </div>


    <!-- Include js files -->
    <!-- Vendor Plugin -->
    <script type="text/javascript" src="{{ asset('/') }}admin/assets/plugin/vendor.min.js"></script>
    <!-- Raphael Plugin -->
    <script type="text/javascript" src="{{ asset('/') }}admin/assets/plugin/raphael/raphael-min.js"></script>
    <!-- Morris Plugin -->
    <script type="text/javascript" src="{{ asset('/') }}admin/assets/plugin/morris/morris.min.js"></script>
    <!-- Sparkline Plugin -->
    <script type="text/javascript" src="{{ asset('/') }}admin/assets/plugin/sparkline/jquery.sparkline.min.js"></script>
    <!-- Dropzone Plugin -->
    <script type="text/javascript" src="{{ asset('/') }}admin/assets/plugin/dropzone/dropzone.min.js"></script>
    <!-- Custom Script Plugin -->
    <script type="text/javascript" src="{{ asset('/') }}admin/dist/js/custom.js"></script>
    <!-- Custom demo Script for Dashbaord -->
    <script type="text/javascript" src="{{ asset('/') }}admin/dist/js/demo/dashboard.js"></script>

</body>

</html>
