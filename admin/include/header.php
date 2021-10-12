<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:45:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../images/logo/amicus.png">
    <link rel="icon" type="image/png" href="../images/logo/amicus.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../images/logo/amicus.png" sizes="16x16">
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
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css"/>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

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
                    <li class="">
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
                        <ul class="nav-2-level">
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
                            
                           <li>
                                <a href="blog_add.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Blog ADD </a>

                            </li>
                             <li>
                                <a href="blog_view.php"><i class="sidebar-item-icon ti-comments-smiley"></i>Blog View</a>

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