@extends('layouts.user')

@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link rel="stylesheet" href="css/hasil-tes/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>

       <div class="parent-wrapper">
    @foreach ( $hasilTes as $hasil)
    <div class="parent">
        <div class="top">
            <img src="../img/lakiBrewok.svg" alt="" srcset="" class="responsive">
            <div class="user-info">
                <p>{{$hasil->user->name}}</p>
                <p>{{$hasil->user->email}}</p>
                <p>{{$hasil->user->jenis_kelamin}}</p>
            </div>
       </div>
       <div class="line"></div>
        <div class="bottom">
            <h6>Hasil Test</h6>
            <p>{{$hasil->nilai}}</p>
            <p class="heading-kesimpulan">{{$hasil->kesimpulan}}</p>
        </div>
    </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
@endsection