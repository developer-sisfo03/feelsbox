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
                <h1>Hallo {{auth()->user()->name}}, Selamat Datang</h1>
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
                                        @foreach($dataKonsultasi as $konsultasi)
                                                {{$konsultasi}},
                                        @endforeach
                                        ]
                                        ,
                                        "dates": [
                                            @foreach($tanggalKonsultasi as $konsultasi)
                                                "{{$konsultasi}}",
                                            @endforeach
                                        ],
                                        },
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
                                            data: ['12-15', '16-18','19-40', '40-60', "60++"]
                                            },
                                            yAxis: {
                                            type: 'value'
                                            },
                                            series: [{
                                            data: [
                                                @foreach($usia as $u)
                                                    {{$u}},
                                                @endforeach
                                            ],
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
                                        series: [
                                            @foreach ($jenisKelamin as $jk)
                                                {{$jk}},                                                 
                                            @endforeach
                                        ],
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

