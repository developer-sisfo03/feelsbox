
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <title>Booking Psikolog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/userAppointment/style.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <p>Dibawah ini akan menampilkan jadwal yang tersedia</p>
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
        

        <script src="/js/appointment.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
