@extends("layouts.psikolog")

@section('content')
<head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Dashboard - NiceAdmin Bootstrap Template</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets-admin/img/favicon.png" rel="icon" />
        <link href="assets-admin/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect" />
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="assets-admin/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="assets-admin/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link
            href="assets-admin/vendor/boxicons/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link href="assets-admin/vendor/quill/quill.snow.css" rel="stylesheet" />
        <link href="assets-admin/vendor/quill/quill.bubble.css" rel="stylesheet" />
        <link href="assets-admin/vendor/remixicon/remixicon.css" rel="stylesheet" />
        <link
            href="assets-admin/vendor/simple-datatables/style.css"
            rel="stylesheet"
        />

        <!-- Template Main CSS File -->
        <link href="assets-admin/css/style.css" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>
    <body>
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>Hallo Admin Ren, Selamat Datang</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- End Page Title -->

            <section class="section dashboard">
                <div class="row">
                    <!-- Left side columns -->
                    <div class="col-lg-14">
                        <div class="row">
                        <div class="col-lg-14">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Jumlah Konsultasi</h5>

                                <!-- Area Chart -->
                                <div id="areaChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                    const series = {
                                        "monthDataSeries1": {
                                        "prices": [
                                            8107.85,
                                            8128.0,
                                            8122.9,
                                            8165.5,
                                            8340.7,
                                            8423.7,
                                            8423.5,
                                            8514.3,
                                            8481.85,
                                            8487.7,
                                            8506.9,
                                            8626.2,
                                            8668.95,
                                            8602.3,
                                            8607.55,
                                            8512.9,
                                            8496.25,
                                            8600.65,
                                            8881.1,
                                            9340.85
                                        ],
                                        "dates": [
                                            "13 Nov 2017",
                                            "14 Nov 2017",
                                            "15 Nov 2017",
                                            "16 Nov 2017",
                                            "17 Nov 2017",
                                            "20 Nov 2017",
                                            "21 Nov 2017",
                                            "22 Nov 2017",
                                            "23 Nov 2017",
                                            "24 Nov 2017",
                                            "27 Nov 2017",
                                            "28 Nov 2017",
                                            "29 Nov 2017",
                                            "30 Nov 2017",
                                            "01 Dec 2017",
                                            "04 Dec 2017",
                                            "05 Dec 2017",
                                            "06 Dec 2017",
                                            "07 Dec 2017",
                                            "08 Dec 2017"
                                        ]
                                        },
                                        "monthDataSeries2": {
                                        "prices": [
                                            8423.7,
                                            8423.5,
                                            8514.3,
                                            8481.85,
                                            8487.7,
                                            8506.9,
                                            8626.2,
                                            8668.95,
                                            8602.3,
                                            8607.55,
                                            8512.9,
                                            8496.25,
                                            8600.65,
                                            8881.1,
                                            9040.85,
                                            8340.7,
                                            8165.5,
                                            8122.9,
                                            8107.85,
                                            8128.0
                                        ],
                                        "dates": [
                                            "13 Nov 2017",
                                            "14 Nov 2017",
                                            "15 Nov 2017",
                                            "16 Nov 2017",
                                            "17 Nov 2017",
                                            "20 Nov 2017",
                                            "21 Nov 2017",
                                            "22 Nov 2017",
                                            "23 Nov 2017",
                                            "24 Nov 2017",
                                            "27 Nov 2017",
                                            "28 Nov 2017",
                                            "29 Nov 2017",
                                            "30 Nov 2017",
                                            "01 Dec 2017",
                                            "04 Dec 2017",
                                            "05 Dec 2017",
                                            "06 Dec 2017",
                                            "07 Dec 2017",
                                            "08 Dec 2017"
                                        ]
                                        },
                                        "monthDataSeries3": {
                                        "prices": [
                                            7114.25,
                                            7126.6,
                                            7116.95,
                                            7203.7,
                                            7233.75,
                                            7451.0,
                                            7381.15,
                                            7348.95,
                                            7347.75,
                                            7311.25,
                                            7266.4,
                                            7253.25,
                                            7215.45,
                                            7266.35,
                                            7315.25,
                                            7237.2,
                                            7191.4,
                                            7238.95,
                                            7222.6,
                                            7217.9,
                                            7359.3,
                                            7371.55,
                                            7371.15,
                                            7469.2,
                                            7429.25,
                                            7434.65,
                                            7451.1,
                                            7475.25,
                                            7566.25,
                                            7556.8,
                                            7525.55,
                                            7555.45,
                                            7560.9,
                                            7490.7,
                                            7527.6,
                                            7551.9,
                                            7514.85,
                                            7577.95,
                                            7592.3,
                                            7621.95,
                                            7707.95,
                                            7859.1,
                                            7815.7,
                                            7739.0,
                                            7778.7,
                                            7839.45,
                                            7756.45,
                                            7669.2,
                                            7580.45,
                                            7452.85,
                                            7617.25,
                                            7701.6,
                                            7606.8,
                                            7620.05,
                                            7513.85,
                                            7498.45,
                                            7575.45,
                                            7601.95,
                                            7589.1,
                                            7525.85,
                                            7569.5,
                                            7702.5,
                                            7812.7,
                                            7803.75,
                                            7816.3,
                                            7851.15,
                                            7912.2,
                                            7972.8,
                                            8145.0,
                                            8161.1,
                                            8121.05,
                                            8071.25,
                                            8088.2,
                                            8154.45,
                                            8148.3,
                                            8122.05,
                                            8132.65,
                                            8074.55,
                                            7952.8,
                                            7885.55,
                                            7733.9,
                                            7897.15,
                                            7973.15,
                                            7888.5,
                                            7842.8,
                                            7838.4,
                                            7909.85,
                                            7892.75,
                                            7897.75,
                                            7820.05,
                                            7904.4,
                                            7872.2,
                                            7847.5,
                                            7849.55,
                                            7789.6,
                                            7736.35,
                                            7819.4,
                                            7875.35,
                                            7871.8,
                                            8076.5,
                                            8114.8,
                                            8193.55,
                                            8217.1,
                                            8235.05,
                                            8215.3,
                                            8216.4,
                                            8301.55,
                                            8235.25,
                                            8229.75,
                                            8201.95,
                                            8164.95,
                                            8107.85,
                                            8128.0,
                                            8122.9,
                                            8165.5,
                                            8340.7,
                                            8423.7,
                                            8423.5,
                                            8514.3,
                                            8481.85,
                                            8487.7,
                                            8506.9,
                                            8626.2
                                        ],
                                        "dates": [
                                            "02 Jun 2017",
                                            "05 Jun 2017",
                                            "06 Jun 2017",
                                            "07 Jun 2017",
                                            "08 Jun 2017",
                                            "09 Jun 2017",
                                            "12 Jun 2017",
                                            "13 Jun 2017",
                                            "14 Jun 2017",
                                            "15 Jun 2017",
                                            "16 Jun 2017",
                                            "19 Jun 2017",
                                            "20 Jun 2017",
                                            "21 Jun 2017",
                                            "22 Jun 2017",
                                            "23 Jun 2017",
                                            "27 Jun 2017",
                                            "28 Jun 2017",
                                            "29 Jun 2017",
                                            "30 Jun 2017",
                                            "03 Jul 2017",
                                            "04 Jul 2017",
                                            "05 Jul 2017",
                                            "06 Jul 2017",
                                            "07 Jul 2017",
                                            "10 Jul 2017",
                                            "11 Jul 2017",
                                            "12 Jul 2017",
                                            "13 Jul 2017",
                                            "14 Jul 2017",
                                            "17 Jul 2017",
                                            "18 Jul 2017",
                                            "19 Jul 2017",
                                            "20 Jul 2017",
                                            "21 Jul 2017",
                                            "24 Jul 2017",
                                            "25 Jul 2017",
                                            "26 Jul 2017",
                                            "27 Jul 2017",
                                            "28 Jul 2017",
                                            "31 Jul 2017",
                                            "01 Aug 2017",
                                            "02 Aug 2017",
                                            "03 Aug 2017",
                                            "04 Aug 2017",
                                            "07 Aug 2017",
                                            "08 Aug 2017",
                                            "09 Aug 2017",
                                            "10 Aug 2017",
                                            "11 Aug 2017",
                                            "14 Aug 2017",
                                            "16 Aug 2017",
                                            "17 Aug 2017",
                                            "18 Aug 2017",
                                            "21 Aug 2017",
                                            "22 Aug 2017",
                                            "23 Aug 2017",
                                            "24 Aug 2017",
                                            "28 Aug 2017",
                                            "29 Aug 2017",
                                            "30 Aug 2017",
                                            "31 Aug 2017",
                                            "01 Sep 2017",
                                            "04 Sep 2017",
                                            "05 Sep 2017",
                                            "06 Sep 2017",
                                            "07 Sep 2017",
                                            "08 Sep 2017",
                                            "11 Sep 2017",
                                            "12 Sep 2017",
                                            "13 Sep 2017",
                                            "14 Sep 2017",
                                            "15 Sep 2017",
                                            "18 Sep 2017",
                                            "19 Sep 2017",
                                            "20 Sep 2017",
                                            "21 Sep 2017",
                                            "22 Sep 2017",
                                            "25 Sep 2017",
                                            "26 Sep 2017",
                                            "27 Sep 2017",
                                            "28 Sep 2017",
                                            "29 Sep 2017",
                                            "03 Oct 2017",
                                            "04 Oct 2017",
                                            "05 Oct 2017",
                                            "06 Oct 2017",
                                            "09 Oct 2017",
                                            "10 Oct 2017",
                                            "11 Oct 2017",
                                            "12 Oct 2017",
                                            "13 Oct 2017",
                                            "16 Oct 2017",
                                            "17 Oct 2017",
                                            "18 Oct 2017",
                                            "19 Oct 2017",
                                            "23 Oct 2017",
                                            "24 Oct 2017",
                                            "25 Oct 2017",
                                            "26 Oct 2017",
                                            "27 Oct 2017",
                                            "30 Oct 2017",
                                            "31 Oct 2017",
                                            "01 Nov 2017",
                                            "02 Nov 2017",
                                            "03 Nov 2017",
                                            "06 Nov 2017",
                                            "07 Nov 2017",
                                            "08 Nov 2017",
                                            "09 Nov 2017",
                                            "10 Nov 2017",
                                            "13 Nov 2017",
                                            "14 Nov 2017",
                                            "15 Nov 2017",
                                            "16 Nov 2017",
                                            "17 Nov 2017",
                                            "20 Nov 2017",
                                            "21 Nov 2017",
                                            "22 Nov 2017",
                                            "23 Nov 2017",
                                            "24 Nov 2017",
                                            "27 Nov 2017",
                                            "28 Nov 2017"
                                        ]
                                        }
                                    }
                                    new ApexCharts(document.querySelector("#areaChart"), {
                                        series: [{
                                        name: "STOCK ABC",
                                        data: series.monthDataSeries1.prices
                                        }],
                                        chart: {
                                        type: 'area',
                                        height: 350,
                                        zoom: {
                                            enabled: false
                                        }
                                        },
                                        dataLabels: {
                                        enabled: false
                                        },
                                        stroke: {
                                        curve: 'straight'
                                        },
                                        subtitle: {
                                        text: '',
                                        align: 'left'
                                        },
                                        labels: series.monthDataSeries1.dates,
                                        xaxis: {
                                        type: 'datetime',
                                        },
                                        yaxis: {
                                        opposite: true
                                        },
                                        legend: {
                                        horizontalAlign: 'left'
                                        }
                                    }).render();
                                    });
                                </script>
                                <!-- End Area Chart -->

                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title">Usia</h5>

                                    <!-- Bar Chart -->
                                    <div id="barChart" style="min-height: 290px;" class="echart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#barChart")).setOption({
                                            xAxis: {
                                            type: 'category',
                                            data: ['13-17', '18-22', '23-27']
                                            },
                                            yAxis: {
                                            type: 'value'
                                            },
                                            series: [{
                                            data: [100, 59, 30],
                                            type: 'bar'
                                            }]
                                        });
                                        });
                                    </script>
                                    <!-- End Bar Chart -->
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pie Chart</h5>

                                    <!-- Pie Chart -->
                                    <div id="pieChart" style="min-height: 200px;"></div>

                                    <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#pieChart"), {
                                        series: [44, 55, 13],
                                        chart: {
                                            height: 350,
                                            type: "pie",
                                            toolbar: {
                                            show: true,
                                            },
                                        },
                                        labels: [
                                            "Laki-laki",
                                            "Perempuan",
                                            "Tidak memberikan informasi",
                                        ],
                                        }).render();
                                    });
                                    </script>
                                    <!-- End Pie Chart -->
                                </div>
                                </div>
                            </div>                    
                                                

                            
                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="filter">
                                        <a
                                            class="icon"
                                            href="#"
                                            data-bs-toggle="dropdown"
                                            ><i class="bi bi-three-dots"></i
                                        ></a>
                                        <ul
                                            class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                        >
                                            <li
                                                class="dropdown-header text-start"
                                            >
                                                <h6>Filter</h6>
                                            </li>

                                            <li>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Today</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >This Month</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >This Year</a
                                                >
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Recent Sales <span>| Today</span>
                                        </h5>

                                        <table
                                            class="table table-borderless datatable"
                                        >
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">
                                                        Customer
                                                    </th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <a href="#">#2457</a>
                                                    </th>
                                                    <td>Brandon Jacob</td>
                                                    <td>
                                                        <a
                                                            href="#"
                                                            class="text-primary"
                                                            >At praesentium
                                                            minu</a
                                                        >
                                                    </td>
                                                    <td>$64</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success"
                                                            >Approved</span
                                                        >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <a href="#">#2147</a>
                                                    </th>
                                                    <td>Bridie Kessler</td>
                                                    <td>
                                                        <a
                                                            href="#"
                                                            class="text-primary"
                                                            >Blanditiis dolor
                                                            omnis similique</a
                                                        >
                                                    </td>
                                                    <td>$47</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-warning"
                                                            >Pending</span
                                                        >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <a href="#">#2049</a>
                                                    </th>
                                                    <td>Ashleigh Langosh</td>
                                                    <td>
                                                        <a
                                                            href="#"
                                                            class="text-primary"
                                                            >At recusandae
                                                            consectetur</a
                                                        >
                                                    </td>
                                                    <td>$147</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success"
                                                            >Approved</span
                                                        >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <a href="#">#2644</a>
                                                    </th>
                                                    <td>Angus Grady</td>
                                                    <td>
                                                        <a
                                                            href="#"
                                                            class="text-primar"
                                                            >Ut voluptatem id
                                                            earum et</a
                                                        >
                                                    </td>
                                                    <td>$67</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-danger"
                                                            >Rejected</span
                                                        >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <a href="#">#2644</a>
                                                    </th>
                                                    <td>Raheem Lehner</td>
                                                    <td>
                                                        <a
                                                            href="#"
                                                            class="text-primary"
                                                            >Sunt similique
                                                            distinctio</a
                                                        >
                                                    </td>
                                                    <td>$165</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success"
                                                            >Approved</span
                                                        >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Recent Sales -->
                        </div>
                    </div>
                    <!-- End Left side columns -->
                </div>
            </section>
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>NiceAdmin</span></strong
                >. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </footer>
        <!-- End Footer -->

        <a
            href="#"
            class="back-to-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short"></i
        ></a>

        <!-- Vendor JS Files -->
        <script src="assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets-admin/vendor/chart.js/chart.min.js"></script>
        <script src="assets-admin/vendor/echarts/echarts.min.js"></script>
        <script src="assets-admin/vendor/quill/quill.min.js"></script>
        <script src="assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets-admin/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets-admin/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets-admin/js/main.js"></script>
    </body>

