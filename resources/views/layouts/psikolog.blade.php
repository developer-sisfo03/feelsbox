<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Dashboard - NiceAdmin Bootstrap Template</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>

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
                    <a class="nav-link collapsed" href="/profile">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
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