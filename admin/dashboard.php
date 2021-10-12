<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:45:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title> Dashboard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" href="" sizes="32x32">
    <link rel="icon" type="image/png" href="" sizes="16x16">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<style type="text/css">
    header .page-brand {
    
    background-color: #f2f3fa !important;
  
}
</style>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a href="dashboard.php">
                    <img src="../images/logo.png">
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                            <span>Search here...</span>
                        </a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">


                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header text-center">

                                <a class="text-muted font-13" href="javascript:;">view all</a>
                            </div>
                            <div class="p-3">
                                <ul class="timeline scroller" data-height="100px">
                                    <li class="timeline-item"><i class="ti-envelope timeline-icon"></i>
                                        <span>
                                            <span class="badge badge-warning badge-pill ml-2">important</span>
                                        </span><small class="float-right text-muted"></small>Message</li>
                                    <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                                        <span>
                                            <!--  -->
                                            <span class="badge badge-warning badge-pill ml-2">important</span>
                                        </span><small class="float-right text-muted"></small>Appointment</li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <span>Admin</span>
                            <img src="assets/img/images.jpg" alt="image" />
                        </a>
                        <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header">
                                <div class="admin-avatar">
                                    <img src="assets/img/images.jpg" alt="image" />
                                </div>
                                <div>
                                    <h5 class="font-strong text-white">Admin</h5>
                                    <div>
                                        <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                        <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-menu-features">
                                <a class="admin-features-item" href="profile.php"><i class="ti-user"></i>
                                    <span>PROFILE</span>
                                </a>
                                <a class="admin-features-item" href="#"><i class="ti-support"></i>
                                    <span>SUPPORT</span>
                                </a>
                                <a class="admin-features-item" href="changepassword.php"><i class="ti-settings"></i>
                                    <span>SETTINGS</span>
                                </a>
                            </div>
                            <div class="admin-menu-content">


                                <div class="d-flex justify-content-between mt-2">
                                    <a class="text-muted" href="javascript:;">Earnings history</a>
                                    <a class="d-flex align-items-center" href="logout.php">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li class="active">
                        <a href="dashboard.php"><i class="sidebar-item-icon ti-desktop"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="../index.php" target="_blank"><i class="sidebar-item-icon ti-desktop"></i>
                            <span class="nav-label">View Site</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="sidebar-item-icon ti-image"></i>
                            <span class="nav-label">Career Dashboard</span><i class="fa fa-angle-down arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="career.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Career</a>

                            </li>
                            <li>
                                <a href="admin_fresherform.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Entry Level Form</a>

                            </li>
                            <li>
                                <a href="admin_intertform.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Internship Form</a>

                            </li>
                            <li>
                                <a href="admin_experience.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Experienced Form</a>

                            </li>
                            <li>
                                <a href="request.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Career Requests</a>

                            </li>
                            <li>
                                <a href="admin_contact_form.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Contact Form</a>

                            </li>
                        </ul>
                    </li>
 <li>
                        <a href="#"><i class="sidebar-item-icon ti-image"></i>
                            <span class="nav-label">CMS Dashboard</span><i class="fa fa-angle-down arrow"></i></a>
                        <ul class="nav-2-level">
                            <li>
                                <a href="admin_home.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Home</a>

                            </li>
                            <li>
                                <a href="admin_about.php"><i class="sidebar-item-icon ti-comments-smiley"></i>About</a>

                            </li>
                            <li>
                                <a href="admin_data_services.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Data Services</a>

                            </li>
                            <li>
                                <a href="admin_itam_services.php"><i class="sidebar-item-icon ti-comments-smiley"></i>ITAM Servcies</a>

                            </li>
                            <li>
                                <a href="admin_itsm_services.php"><i class="sidebar-item-icon ti-comments-smiley"></i>ITSM Servcies</a>

                            </li>
							<li>
                                <a href="admin_pure.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Pure Data</a>

                            </li>
                            <li>
                                <a href="admin_software_license.php"><i class="sidebar-item-icon ti-comments-smiley"></i> Software License Management</a>

                            </li>
                            <li>
                                <a href="admin_advisory_services.php"><i class="sidebar-item-icon ti-comments-smiley"></i> Advisory Services</a>

                            </li>
                              <li>
                        <a href="admin_service_desk.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Service Desk</a>

                            </li>

                        
                        <li>
                        <a href="admin_methodology.php"><i class="sidebar-item-icon ti-image"></i>
                            <span class="nav-label">Methodology</span></a>
                            </li>
                                <li>
                        <a href="admin_contact.php"><i class="sidebar-item-icon ti-image"></i>
                            <span class="nav-label">Contact</span></a>
                            </li>
                            <li>
                        <a href="admin_career_cms.php"><i class="sidebar-item-icon ti-image"></i>
                            <span class="nav-label">Career</span></a>
                            </li>
                             <li>
                        <a href="admin_footer.php"><i class="sidebar-item-icon ti-image"></i>
                            <span class="nav-label">Footer</span></a>
                            </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#"><i class="ti-announcement"></i></a>
                    <a href="#"><i class="ti-calendar"></i></a>
                    <a href="#"><i class="ti-comments"></i></a>
                    <a href="logout.php"><i class="ti-power-off"></i></a>
                </div>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="73" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-success">5</h3>
                                    <div class="text-muted">Total Services</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="42" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                    <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-primary">3</h3>
                                    <div class="text-muted">Country Visit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="70" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-pink">1000</h3>
                                    <div class="text-muted">Total Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <!-- END PAGE CONTENT-->




            <footer class="page-footer">
                <div class="font-13">2019 © <b>Amicus</b> - Save your time, choose the best</div>

                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="#" method="post">
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    <!-- END SEARCH PANEL-->
    <!-- BEGIN THEME CONFIG PANEL-->

    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- New question dialog-->
    <div class="modal fade" id="session-dialog">
        <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content timeout-modal">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
                    <div class="text-center h4 mb-3">Set Auto Logout</div>
                    <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
                    <div id="timeout-reset-box" style="display:none;">
                        <div class="form-group text-center">
                            <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                        </div>
                    </div>
                    <div id="timeout-activate-box">
                        <form id="timeout-form" action="javascript:;">
                            <div class="form-group pl-3 pr-3 mb-4">
                                <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New question dialog-->
    <!-- QUICK SIDEBAR-->

    <!-- END QUICK SIDEBAR-->
    <!-- CORE PLUGINS-->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="assets/vendors/toastr/toastr.min.js"></script>
    <script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="assets/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="assets/js/scripts/dashboard_visitors.js"></script>
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:45:41 GMT -->

</html>