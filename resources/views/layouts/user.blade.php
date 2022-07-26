<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Dashboard - NiceAdmin Bootstrap Template</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="../../../../assets-admin/img/favicon.png" rel="icon" />
        <link href="../../../../assets-admin/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect" />
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="../../../../assets-admin/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="../../../../assets-admin/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link
            href="../../../../assets-admin/vendor/boxicons/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link href="../../../../assets-admin/vendor/quill/quill.snow.css" rel="stylesheet" />
        <link href="../../../../assets-admin/vendor/quill/quill.bubble.css" rel="stylesheet" />
        <link href="../../../../assets-admin/vendor/remixicon/remixicon.css" rel="stylesheet" />
        <link
            href="../../../../assets-admin/vendor/simple-datatables/style.css"
            rel="stylesheet"
        />

        <!-- Template Main CSS File -->
        <link href="../../../../assets-admin/css/style.css" rel="stylesheet" />
        <style>
            .footer {
                background-color: #f5f5f5;
                position: fixed;
                bottom: 0;
                width: 100%;
            }
            .content{
                background-color: red;
                margin-top: 100px;
            }
        </style>


        <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="../../../../assets-admin/img/logo.png" alt="" />
                    <span class="d-none d-lg-block">Feelsbox</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
            <!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle" href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <!-- End Search Icon-->

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link nav-icon"
                            href="#"
                            data-bs-toggle="dropdown"
                        >
                            <i class="bi bi-bell"></i>
                            <span class="badge bg-primary badge-number"
                                >4</span
                            > </a
                        ><!-- End Notification Icon -->

                        <ul
                            class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
                        >
                            <li class="dropdown-header">
                                You have 4 new notifications
                                <a href="#"
                                    ><span
                                        class="badge rounded-pill bg-primary p-2 ms-2"
                                        >View all</span
                                    ></a
                                >
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li class="notification-item">
                                <i
                                    class="bi bi-exclamation-circle text-warning"
                                ></i>
                                <div>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>30 min. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-x-circle text-danger"></i>
                                <div>
                                    <h4>Atque rerum nesciunt</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>1 hr. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-check-circle text-success"></i>
                                <div>
                                    <h4>Sit rerum fuga</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>2 hrs. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-info-circle text-primary"></i>
                                <div>
                                    <h4>Dicta reprehenderit</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li class="dropdown-footer">
                                <a href="#">Show all notifications</a>
                            </li>
                        </ul>
                        <!-- End Notification Dropdown Items -->
                    </li>
                    <!-- End Notification Nav -->

                    <li class="nav-item dropdown pe-3">
                        <a
                            class="nav-link nav-profile d-flex align-items-center pe-0"
                            href="#"
                            data-bs-toggle="dropdown"
                        >
                            <img
                                src="../../../../assets-admin/img/profile-img.jpg"
                                alt="Profile"
                                class="rounded-circle"
                            />
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span
                            > </a
                        ><!-- End Profile Iamge Icon -->

                        <ul
                            class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
                        >
                            <li class="dropdown-header">
                                <h6>{{auth()->user()->name}}</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a
                                    class="dropdown-item d-flex align-items-center"
                                    href="users-profile.html"
                                >
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a
                                    class="dropdown-item d-flex align-items-center"
                                    href="users-profile.html"
                                >
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a
                                    class="dropdown-item d-flex align-items-center"
                                    href="pages-faq.html"
                                >
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a
                                    class="dropdown-item d-flex align-items-center"
                                    href="#"
                                >
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Profile Dropdown Items -->
                    </li>
                    <!-- End Profile Nav -->
                </ul>
            </nav>
            <!-- End Icons Navigation -->
        </header>
        <!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <i class="bi bi-house-door-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/tes-mental">
                        <i class="bi bi-pencil-square"></i>
                        <span>Tes Mental</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/hasil-tes">
                        <i class="bi bi-card-checklist"></i>
                        <span>Hasil Tes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/#psikolog">
                        <i class="bi bi-card-checklist"></i>
                        <span>Appointment</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/logout">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar-->
        <main id="main" class="main">
            @yield('content')
        </main>
        <!-- End Main -->
        <a
            href="#"
            class="back-to-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short"></i
        ></a>

        <!-- Vendor JS Files -->
        <script src="../../../../assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="../../../../assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../../assets-admin/vendor/chart.js/chart.min.js"></script>
        <script src="../../../../assets-admin/vendor/echarts/echarts.min.js"></script>
        <script src="../../../../assets-admin/vendor/quill/quill.min.js"></script>
        <script src="../../../../assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="../../../../assets-admin/vendor/tinymce/tinymce.min.js"></script>
        <script src="../../../../assets-admin/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../../../../assets-admin/js/main.js"></script>
    </body>
</html>