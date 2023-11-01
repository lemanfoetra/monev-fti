<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> @yield('title') </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('templates-backend') }}/img/brand/favicon.png" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ url('templates-backend') }}/css/icons.css" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="{{ url('templates-backend') }}/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!--  Sidebar css -->
    <link href="{{ url('templates-backend') }}/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!--- Internal Morris css-->
    <link href="{{ url('templates-backend') }}/plugins/morris.js/morris.css" rel="stylesheet">

    <!--- Style css --->
    <link href="{{ url('templates-backend') }}/css/style.css" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="{{ url('templates-backend') }}/css/style-dark.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ url('templates-backend') }}/css/skin-modes.css" rel="stylesheet" />

</head>

<body class="main-body">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ url('templates-backend') }}/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-header opened -->
        <div class="main-header nav nav-item hor-header">
            <div class="container">
                <div class="main-header-left ">
                    <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
                    <a class="header-brand" href="index.html">
                        <img src="{{ url('templates-backend') }}/img/brand/logo-white.png" class="desktop-dark">
                        <img src="{{ url('templates-backend') }}/img/brand/logo.png" class="desktop-logo">
                        <img src="{{ url('templates-backend') }}/img/brand/favicon.png" class="desktop-logo-1">
                        <img src="{{ url('templates-backend') }}/img/brand/favicon-white.png" class="desktop-logo-dark">
                    </a>
                </div>
                <!-- search -->
                <div class="main-header-right">
                    <div class="nav nav-item  navbar-nav-right ml-auto">
                        <div class="nav-link" id="bs-example-navbar-collapse-1">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="reset" class="btn btn-default">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button type="submit" class="btn btn-default nav-link resp-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown main-profile-menu nav nav-item nav-link">
                            <a class="profile-user d-flex" href=""><img alt="" src="{{ url('templates-backend') }}/img/faces/6.jpg"></a>
                            <div class="dropdown-menu">
                                <div class="main-header-profile bg-primary p-3">
                                    <div class="d-flex wd-100p">
                                        <div class="main-img-user"><img alt="" src="{{ url('templates-backend') }}/img/faces/6.jpg" class=""></div>
                                        <div class="ml-3 my-auto">
                                            <h6>Petey Cruiser</h6><span>Premium Member</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
                                <a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
                                <a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
                                <a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
                                <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
                                <a class="dropdown-item" href="{{ route('login.logout') }}"><i class="bx bx-log-out"></i> Sign Out</a>
                            </div>
                        </div>
                        <div class="dropdown main-header-message right-toggle">
                            <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-header -->

        <!--Horizontal-main -->
        <div class="sticky">
            <div class="horizontal-main hor-menu clearfix side-header">
                <div class="horizontal-mainwrapper container clearfix">
                    <!--Nav-->
                    <nav class="horizontalMenu clearfix">
                        <!-- <ul class="horizontalMenu-list">
                            <li aria-haspopup="true">
                                <a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24">
                                        <g>
                                            <rect fill="none" />
                                        </g>
                                        <g>
                                            <g />
                                            <g>
                                                <path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z" />
                                                <path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3" />
                                            </g>
                                            <g>
                                                <path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z" />
                                                <path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z" />
                                                <path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z" />
                                            </g>
                                        </g>
                                    </svg>Settting <i class="fe fe-chevron-down horizontal-icon"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ url('role') }}" class="slide-item">Role</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('menu') }}" class="slide-item">Managment Menu</a></li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="mail.html" class="slide-item">Mail-inbox</a></li>
                                            <li aria-haspopup="true"><a href="mail-compose.html" class="slide-item">Mail-compose</a></li>
                                            <li aria-haspopup="true"><a href="mail-read.html" class="slide-item">Mail-read</a></li>
                                            <li aria-haspopup="true"><a href="mail-settings.html" class="slide-item">Mail-settings</a></li>
                                            <li aria-haspopup="true"><a href="chat.html" class="slide-item">Chat</a></li>

                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Forms</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="form-elements.html" class="slide-item">Form Elements</a></li>
                                            <li aria-haspopup="true"><a href="form-advanced.html" class="slide-item">Advanced Forms</a></li>
                                            <li aria-haspopup="true"><a href="form-layouts.html" class="slide-item">Form Layouts</a></li>
                                            <li aria-haspopup="true"><a href="form-validation.html" class="slide-item">Form Validation</a></li>
                                            <li aria-haspopup="true"><a href="form-wizards.html" class="slide-item">Form Wizards</a></li>
                                            <li aria-haspopup="true"><a href="form-editor.html" class="slide-item">WYSIWYG Editor</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true"><a href="invoice.html" class="slide-item">Invoice</a></li>
                                    <li aria-haspopup="true"><a href="todotask.html" class="slide-item">Todotask</a></li>
                                    <li aria-haspopup="true"><a href="pricing.html" class="slide-item">Pricing</a></li>
                                    <li aria-haspopup="true"><a href="gallery.html" class="slide-item">Gallery</a></li>
                                    <li aria-haspopup="true"><a href="faq.html" class="slide-item">Faqs</a></li>
                                    <li aria-haspopup="true"><a href="empty.html" class="slide-item">Empty Page</a></li>
                                </ul>
                            </li>

                            <li aria-haspopup="true">
                                <a href="" class="sub-icon">Setting</a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="false" class="sub-menu"><a href="role" class="sub-icon">Role Managment</a></li>
                                    <li aria-haspopup="false" class="sub-menu"><a href="menu" class="sub-icon">Menu managment</a></li>
                                </ul>
                                <a href="user" class="sub-icon">Kelola User</a>
                            </li>
                        </ul> -->
                        <?= menuBuilder() ?>
                    </nav>
                    <!--Nav-->
                </div>
            </div>
        </div>
        <!--Horizontal-main -->

        <!-- main-content opened -->
        <div class="main-content horizontal-content">

            @yield('content')

        </div>
        <!-- Container closed -->

        <!-- Sidebar-right-->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 box-shadow">
                <div class="tab-menu-heading border-0 p-3">
                    <div class="card-title mb-0">Notifications</div>
                    <div class="card-options ml-auto">
                        <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
                            <li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
                            <li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active " id="side1">
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-primary brround avatar-md">CH</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>New Websites is Created</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">30 mins ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-danger brround avatar-md">N</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare For the Next Project</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">2 hours ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-info brround avatar-md">S</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Decide the live Discussion</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">3 hours ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-warning brround avatar-md">K</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Meeting at 3:00 pm</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">4 hours ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-success brround avatar-md">R</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">1 days ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-pink brround avatar-md">MS</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">1 days ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-purple brround avatar-md">L</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">45 mintues ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center p-3">
                                <div class="">
                                    <span class="avatar bg-blue brround avatar-md">U</span>
                                </div>
                                <a class="wrapper w-100 ml-3" href="#">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">2 days ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane  " id="side2">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/1.jpg"></span>
                                    </div>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 mintues ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/11.jpg"></span>
                                    </div>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 mintues ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div>
                                        <strong>Olivia</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            12 mintues ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " id="side3">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/11.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/13.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/4.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/7.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/2.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/11.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="mr-2">
                                        <span class="avatar avatar-md brround cover-image" data-image-src="{{ url('templates-backend') }}/img/faces/4.jpg"></span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span>Copyright © 2021 <a href="#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ url('templates-backend') }}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ url('templates-backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Ionicons js -->
    <script src="{{ url('templates-backend') }}/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="{{ url('templates-backend') }}/plugins/moment/moment.js"></script>

    <!--Internal Sparkline js -->
    <script src="{{ url('templates-backend') }}/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Moment js -->
    <script src="{{ url('templates-backend') }}/plugins/raphael/raphael.min.js"></script>

    <!-- Internal Piety js -->
    <script src="{{ url('templates-backend') }}/plugins/peity/jquery.peity.min.js"></script>

    <!-- Rating js-->
    <script src="{{ url('templates-backend') }}/plugins/rating/jquery.rating-stars.js"></script>
    <script src="{{ url('templates-backend') }}/plugins/rating/jquery.barrating.js"></script>

    <!-- P-scroll js -->
    <script src="{{ url('templates-backend') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('templates-backend') }}/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- Sidemenu js-->
    <script src="{{ url('templates-backend') }}/plugins/sidebar/sidebar.js"></script>
    <script src="{{ url('templates-backend') }}/plugins/sidebar/sidebar-custom.js"></script>

    <!-- Eva-icons js -->
    <script src="{{ url('templates-backend') }}/js/eva-icons.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="{{ url('templates-backend') }}/js/apexcharts.js"></script>

    <!-- Horizontalmenu js-->
    <script src="{{ url('templates-backend') }}/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

    <!-- Sticky js -->
    <script src="{{ url('templates-backend') }}/js/sticky.js"></script>

    <!-- Internal Map -->
    <script src="{{ url('templates-backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('templates-backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!-- Internal Chart js -->
    <script src="{{ url('templates-backend') }}/plugins/chart.js/Chart.bundle.min.js"></script>

    <!--Internal  index js -->
    <script src="{{ url('templates-backend') }}/js/index.js"></script>
    <script src="{{ url('templates-backend') }}/js/jquery.vmap.sampledata.js"></script>

    <!-- custom js -->
    <script src="{{ url('templates-backend') }}/js/custom.js"></script>
    <script src="{{ url('templates-backend') }}/js/jquery.vmap.sampledata.js"></script>

    @yield('script')
</body>

</html>