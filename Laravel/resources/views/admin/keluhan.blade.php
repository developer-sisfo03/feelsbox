@extends("layouts.admin")

@section('content')
<head>
        <!-- Template Main CSS File -->
        <link rel="stylesheet" href="../css/keluhanAdmin/style.css">

</head>
<body>
    <div class="parent-wrapper">
    @foreach($keluhans as $k)
        <div class="parent">
            <h1>{{$k->user->name}}</h1>
            <div class="line"></div>
            <p>{{$k->keluhan}}</p>
        </div>
    </div>
    @endforeach
    </div>
</body>

        <!-- Vendor JS Files -->
        <script src="../assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="../assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets-admin/vendor/chart.js/chart.min.js"></script>
        <script src="../assets-admin/vendor/echarts/echarts.min.js"></script>
        <script src="../assets-admin/vendor/quill/quill.min.js"></script>
        <script src="../assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="../assets-admin/vendor/tinymce/tinymce.min.js"></script>
        <script src="../assets-admin/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../assets-admin/js/main.js"></script>
</html>
@endsection