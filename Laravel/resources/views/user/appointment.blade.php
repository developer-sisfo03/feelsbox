@extends('layouts.user')

@section('content')
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/userAppointment/style.css">
    </head>
    <body>
        <div class="parent">
            <div class="parent-wrapper">
                <div class="search">
                    <select name="tanggal" id="tanggal">
                        <option value="">Pilih Tanggal</option>
                        @foreach($tanggal as $j)
                            <option value="{{$j}}" >{{$j}}</option>
                        @endforeach
                    </select>
                    <button type="button" onclick="jadwalPsikolog()">Cari</button>
                </div>
                <div class="line"></div>
                <div class="schedule-heading">
                    <h3>Jadwal Tersedia</h3>
                    <p>Dibawah ini merupakan jadwal yang tersedia</p>
                </div>
                <div>
                    <table  id="hasil" class="table">

                    </table>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <img src="./css/userAppointment/img/wavesBelow.svg" alt="" class="responsive-waves">
            <div class="mental-test">
                <div class="mental-test-wrapper">
                    <div class="left-side-mental">
                        <h1>Take a Test</h1>
                        <p>Ukur tingkat kesehatan mental anda dengan mengikuti tes mental. klik tombol di bawah untuk melakukan tes.</p>
                        <button type="submit" class="btn btn-mental">Tes Sekarang</button>
                    </div>
                    <div class="right-side-mental">
                        <img src="./img/mental-test-info.svg" alt="" class="responsive">
                    </div>
                </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js%22%3E"></script>
        <script src="/js/appointment.js"></script>
    </body>
@endsection
