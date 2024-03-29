<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
    <title>Add Pricing</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/libs/quill/dist/quill.snow.css')}}">
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('unnamed (1).png')}}" alt="homepage" class="light-logo"/>

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="{{asset('unnamed (2).png')}}" alt="homepage" class="light-logo"/>

                        </span>

                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                            <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div class="">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Event today</h5>
                                                    <span class="mail-desc">Just a reminder that event</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Settings</h5>
                                                    <span class="mail-desc">You can customize this template</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.dashboard',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-cloud"></i><span class="hide-menu">Project</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{route('project',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Add Project </span></a></li>
                            <li class="sidebar-item"><a href="{{route('projects',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Project List </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-nature-people"></i><span class="hide-menu">Employee</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{route('employee',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Add Employee </span></a></li>
                            <li class="sidebar-item"><a href="{{route('employees',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Employee List </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('service',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Offer Service</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-nature-people"></i><span class="hide-menu">Blog</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{route('blog',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Write Blog </span></a></li>
                            <li class="sidebar-item"><a href="{{route('editblog',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Blog List </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-nature-people"></i><span class="hide-menu">Pricing</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{route('packages',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Website Pricing </span></a></li>
                            <li class="sidebar-item"><a href="{{route('appandsoftware',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> App & Software Pricing </span></a></li>
                            <li class="sidebar-item"><a href="{{route('uiuxs',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> UI/UX & Graphic Design Pricing </span></a></li>
                            <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Price List </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('clientlist',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Client List</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('visitor',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Visitor IPs</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('clientmsg',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Client Message</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('calender',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Calendar</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('logout')}}" aria-expanded="false"><i class="fa fa-power-off m-r-5 m-l-5"></i><span class="hide-menu">Logout</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Packages</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Website Pricing</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Maintence Charge</th>
                                <th>Storage Charge</th>
                                <th>Percentage</th>
                                <th>Development (Full-Stack)</th>
                                <th>UI/UX Design</th>
                                <th>Logo Design</th>
                                <th>Business Card Design</th>
                                <th>Training Time</th>
                                <th>Revision</th>
                                <th>Project Manager</th>
                                <th>Edit Request</th>
                                <th>Technical Planning</th>
                                <th>Development Request</th>
                                <th>Security</th>
                                <th>Hosting & Domain Setup</th>
                                <th>Quality Assurance</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($price as $clients)
                                <form action="{{route('basicupdate')}}" method="post">
                                    @csrf
                                        <tr>
                                            <input type="hidden" name="id" value="{{$clients->id}}">
                                            <td style="color: red; font-weight: bolder; font-size: 16px;">{{$clients->type}}</td>
                                            <td><input type="number" name="maintainance" value="{{$clients->maintainance}}"></td>
                                            <td><input type="number" name="storage" value="{{$clients->storage}}"></td>
                                            <td><input type="number" name="peroff" value="{{$clients->peroff}}"></td>
                                            <td><input type="text" name="development" value="{{$clients->development}}"></td>
                                            <td><input type="text" name="UI_UX" value="{{$clients->UI_UX}}"></td>
                                            <td><input type="text" name="logo" value="{{$clients->logo}}"></td>
                                            <td><input type="text" name="business_card" value="{{$clients->business_card}}"></td>
                                            <td><input type="text" name="training_time" value="{{$clients->training_time}}"></td>
                                            <td><input type="text" name="revision" value="{{$clients->revision}}"></td>
                                            <td><input type="text" name="project_manager" value="{{$clients->project_manager}}"></td>
                                            <td><input type="text" name="edit_request" value="{{$clients->edit_request}}"></td>
                                            <td><input type="text" name="technical" value="{{$clients->technical}}"></td>
                                            <td><input type="text" name="development_request" value="{{$clients->development_request}}"></td>
                                            <td><input type="text" name="security" value="{{$clients->security}}"></td>
                                            <td><input type="text" name="hosting" value="{{$clients->hosting}}"></td>
                                            <td><input type="text" name="sqa" value="{{$clients->sqa}}"></td>
                                            <td><button type="submit" class="btn btn-default">Update</button></td>
                                        </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">App and Software Pricing</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Maintence Charge</th>
                                <th>Storage Charge</th>
                                <th>Monthly Charge</th>
                                <th>Percentage</th>
                                <th>Service</th>
                                <th>Validity</th>
                                <th>Updateable</th>
                                <th>Protection</th>
                                <th>Revision</th>
                                <th>Administration Setup</th>
                                <th>Responsive UI/UX</th>
                                <th>A/B Testing</th>
                                <th>Training Test</th>
                                <th>Project Manager</th>
                                <th>Website Integration</th>
                                <th>Platform_Support</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($app as $clients)
                                @if($clients->type === 'App')
                                    <form action="{{route('standardupdate')}}" method="post">
                                        @csrf
                                <tr>
                                    <input type="hidden" name="id" value="{{$clients->id}}">
                                    <td style="color: blue; font-weight: bolder; font-size: 16px;">{{$clients->type}}</td>
                                    <td><input type="text" name="Maintenance_Charge" value="{{$clients->Maintenance_Charge}}"></td>
                                    <td><input type="text" name="Storage_Charge" value="{{$clients->Storage_Charge}}"></td>
                                    <td><input type="text" name="Monthly_Packages" value="{{$clients->Monthly_Packages}}"></td>
                                    <td><input type="text" name="Offer_Percentage" value="{{$clients->Offer_Percentage}}"></td>
                                    <td><input type="text" name="Service" value="{{$clients->Service}}"></td>
                                    <td><input type="text" name="Validity" value="{{$clients->Validity}}"></td>
                                    <td><input type="text" name="Updateable" value="{{$clients->Updateable}}"></td>
                                    <td><input type="text" name="Protection" value="{{$clients->Protection}}"></td>
                                    <td><input type="text" name="Revision" value="{{$clients->Revision}}"></td>
                                    <td><input type="text" name="Administration_Setup" value="{{$clients->Administration_Setup}}"></td>
                                    <td><input type="text" name="Responsive_UI_UX" value="{{$clients->Responsive_UI_UX}}"></td>
                                    <td><input type="text" name="A_B_Testing" value="{{$clients->A_B_Testing}}"></td>
                                    <td><input type="text" name="Training_Test" value="{{$clients->Training_Test}}"></td>
                                    <td><input type="text" name="Project_Manager" value="{{$clients->Project_Manager}}"></td>
                                    <td><input type="text" name="Website_Integration" value="{{$clients->Website_Integration}}"></td>
                                    <td><input type="text" name="Platform_Support" value="{{$clients->Platform_Support}}"></td>
                                    <td><button type="submit" class="btn btn-default">Update</button></td>
                                </tr>
                                    </form>
                                @endif

                                @if($clients->type === 'Software')
                                    <form action="{{route('standardupdate')}}" method="post">
                                        @csrf
                                    <tr>
                                        <input type="hidden" name="id" value="{{$clients->id}}">
                                        <td style="color: #6f42c1; font-weight: bolder; font-size: 16px;">{{$clients->type}}</td>
                                        <td><input type="text" name="Maintenance_Charge" value="{{$clients->Maintenance_Charge}}"></td>
                                        <td><input type="text" name="Storage_Charge" value="{{$clients->Storage_Charge}}"></td>
                                        <td><input type="text" name="Monthly_Packages" value="{{$clients->Monthly_Packages}}"></td>
                                        <td><input type="text" name="Offer_Percentage" value="{{$clients->Offer_Percentage}}"></td>
                                        <td><input type="text" name="Service" value="{{$clients->Service}}"></td>
                                        <td><input type="text" name="Validity" value="{{$clients->Validity}}"></td>
                                        <td><input type="text" name="Updateable" value="{{$clients->Updateable}}"></td>
                                        <td><input type="text" name="Protection" value="{{$clients->Protection}}"></td>
                                        <td><input type="text" name="Revision" value="{{$clients->Revision}}"></td>
                                        <td><input type="text" name="Administration_Setup" value="{{$clients->Administration_Setup}}"></td>
                                        <td><input type="text" name="Responsive_UI_UX" value="{{$clients->Responsive_UI_UX}}"></td>
                                        <td><input type="text" name="A_B_Testing" value="{{$clients->A_B_Testing}}"></td>
                                        <td><input type="text" name="Training_Test" value="{{$clients->Training_Test}}"></td>
                                        <td><input type="text" name="Project_Manager" value="{{$clients->Project_Manager}}"></td>
                                        <td><input type="text" name="Website_Integration" value="{{$clients->Website_Integration}}"></td>
                                        <td><input type="text" name="Platform_Support" value="{{$clients->Platform_Support}}"></td>
                                        <td><button type="submit" class="btn btn-default">Update</button></td>
                                    </tr>
                                    </form>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">UI/UX Pricing</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Service</th>
                                <th>Licence</th>
                                <th>File Type</th>
                                <th>Format Type</th>
                                <th>Mockup Design</th>
                                <th>Showcase Banner</th>
                                <th>Price</th>
                                <th>Revision</th>
                                <th>Service Time</th>
                                <th>Landing/System Design Page</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ui as $clients)
                                @if($clients->type === 'UI/UX')
                                    <form action="{{route('uiupdate')}}" method="post">
                                        @csrf
                                        <tr>
                                            <input type="hidden" name="id" value="{{$clients->id}}">
                                            <td style="color: blue; font-weight: bolder; font-size: 16px;">{{$clients->type}}</td>
                                            <td>{{$clients->services}}</td>
                                            <td><input type="text" name="licence" value="{{$clients->licence}}"></td>
                                            <td><input type="text" name="file" value="{{$clients->file}}"></td>
                                            <td><input type="text" name="format" value="{{$clients->format}}"></td>
                                            <td><input type="text" name="mockup" value="{{$clients->mockup}}"></td>
                                            <td><input type="text" name="showcase" value="{{$clients->showcase}}"></td>
                                            <td><input type="text" name="price" value="{{$clients->price}}"></td>
                                            <td><input type="text" name="revision" value="{{$clients->revision}}"></td>
                                            <td><input type="text" name="service" value="{{$clients->service}}"></td>
                                            <td><input type="text" name="landing" value="{{$clients->landing}}"></td>
                                            <td><button type="submit" class="btn btn-default">Update</button></td>
                                        </tr>
                                    </form>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Graphic Design Pricing</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Service</th>
                                <th>Licence</th>
                                <th>File Type</th>
                                <th>Format Type</th>
                                <th>Mockup Design</th>
                                <th>Showcase Banner</th>
                                <th>Price</th>
                                <th>Revision</th>
                                <th>Service Time</th>

                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ui as $clients)
                                @if($clients->type === 'Graphic-Design')
                                    <form action="{{route('uiupdate')}}" method="post">
                                        @csrf
                                        <tr>
                                            <input type="hidden" name="id" value="{{$clients->id}}">
                                            <td style="color: blue; font-weight: bolder; font-size: 16px;">{{$clients->type}}</td>
                                            <td>{{$clients->services}}</td>
                                            <td><input type="text" name="licence" value="{{$clients->licence}}"></td>
                                            <td><input type="text" name="file" value="{{$clients->file}}"></td>
                                            <td><input type="text" name="format" value="{{$clients->format}}"></td>
                                            <td><input type="text" name="mockup" value="{{$clients->mockup}}"></td>
                                            <td><input type="text" name="showcase" value="{{$clients->showcase}}"></td>
                                            <td><input type="text" name="price" value="{{$clients->price}}"></td>
                                            <td><input type="text" name="revision" value="{{$clients->revision}}"></td>
                                            <td><input type="text" name="service" value="{{$clients->service}}"></td>

                                            <td><button type="submit" class="btn btn-default">Update</button></td>
                                        </tr>
                                    </form>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a
                href="https://www.trodev.com" target="_blank">Trodev</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/asset/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



</body>

</html>
