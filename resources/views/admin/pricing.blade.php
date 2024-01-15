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
    <title>Add Projects (Trodev)</title>
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
                        <img src="{{asset('unnamed (1).png')}}" alt="homepage" class="light-logo" width="50px" height="50px"/>

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="{{asset('unnamed (2).png')}}" alt="homepage" class="light-logo" width="150px" height="50px"/>

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
{{--                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-nature-people"></i><span class="hide-menu">Packages</span></a>--}}
{{--                        <ul aria-expanded="false" class="collapse  first-level">--}}
{{--                            <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Add Packages </span></a></li>--}}
{{--                            <li class="sidebar-item"><a href="{{route('packages',['id'=>$id->id])}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Packages List </span></a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('clientlist',['id'=>$id->id])}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Client List</span></a></li>
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
                    <h4 class="page-title">Add Packages</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal" action="{{route('packageinsert')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Packages Info</h4>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Type</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="details" id="typeSelect" style="width: 100%; height:36px;" required>
                                            <option value="-">Select</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Duration</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="duration" id="durationSelect" style="width: 100%; height:36px;" required>
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Software ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" name="software" value="{{$proj->id}}" required readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Software</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" name="name" value="{{$proj->name}}" required readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Software Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="lname" name="price" value="{{$proj->price}}" required readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Monthly Charge</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="monthly" id="monthlycharge" style="width: 100%; height:36px;" required>
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">SSL Certificate</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="ssl" id="sslcertificate" style="width: 100%; height:36px;" required>
                                            <option>Select</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Training Cost</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="training" id="training" style="width: 100%; height:36px;" required>
                                            <option>Select</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="imageUpload" class="col-sm-3 text-right control-label col-form-label">Revision</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="revision" id="revision" style="width: 100%; height:36px;" required>
                                            <option>Select</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="imageUpload" class="col-sm-3 text-right control-label col-form-label">Domain</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="domain" id="domains" style="width: 100%; height:36px;" required>
                                            <option>Select</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="imageUpload" class="col-sm-3 text-right control-label col-form-label">Storage</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="storage" id="storageSelect" style="width: 100%; height:36px;" required>
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary col-md-4">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
<script>
    $(document).ready(function () {
        $('#softwareSelect').change(function () {
            var selectedId = $(this).val();
            $('#lname').prop('readonly', selectedId === '');
            if (selectedId !== '') {
                var employeeData = <?php echo json_encode($project); ?>;
                var selectedEmployee = employeeData.find(function (emp) {
                    return emp.id == selectedId;
                });
                if (selectedEmployee) {
                    $('#lname').val(selectedEmployee.price).prop('readonly', true);
                }
            } else {
                $('#lname').val('').prop('readonly', false);
            }
        });
    });

    $(document).ready(function () {
        $("#typeSelect").change(function () {
            var selectedType = $(this).val();
            var durationSelect = $("#durationSelect");
            var storageSelect = $("#storageSelect");
            var monthlycharge = $("#monthlycharge");
            var training = $("#training");
            var revision = $("#revision");
            var domains = $("#domains");
            var sslcertificate = $("#sslcertificate");



            durationSelect.empty();
            storageSelect.empty();
            monthlycharge.empty();
            training.empty();
            revision.empty();
            domains.empty();
            sslcertificate.empty();


            // Add new options based on the selected type
            if (selectedType === "Basic") {
                durationSelect.append('<option value="1 Month">1 Month</option>');
                storageSelect.append('<option value="500">500</option>');
                monthlycharge.append('<option value="1000">1000</option>');
                training.append('<option value="500">500</option>');
                revision.append('<option value="2 Times">2 Times</option>');
                domains.append('<option value="Custom Price">Custom Price</option>');
                sslcertificate.append('<option value="500">500</option>');
            } else if (selectedType === "Standard") {
                durationSelect.append('<option value="6 Months">6 Months</option>');
                storageSelect.append('<option value="1000">1000</option>');
                monthlycharge.append('<option value="3000">3000</option>');
                training.append('<option value="500">500</option>');
                revision.append('<option value="5 Times">5 Times</option>');
                domains.append('<option value="Custom Price">Custom Price</option>');
                sslcertificate.append('<option value="1000">1000</option>');
            } else if (selectedType === "Premium") {
                durationSelect.append('<option value="1 Year">1 Year</option>');
                storageSelect.append('<option value="2000">2000</option>');
                monthlycharge.append('<option value="5500">5500</option>');
                training.append('<option value="0">Free</option>');
                revision.append('<option value="Life Time">Life Time</option>');
                domains.append('<option value="Custom Price">Custom Price</option>');
                sslcertificate.append('<option value="0">Free</option>');
            }
            else {
                durationSelect.append('<option value="-">Select</option>');
                storageSelect.append('<option value="-">Select</option>');
                monthlycharge.append('<option value="-">Select</option>');
                training.append('<option value="-">Select</option>');
                revision.append('<option value="-">Select</option>');
                domains.append('<option value="-">Select</option>');
                sslcertificate.append('<option value="-">Select</option>');
            }
        });
    });
</script>



</body>

</html>
