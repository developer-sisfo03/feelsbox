@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/hasil-tes/style.css">
</head>
<body>
    <div class="parent-wrapper">
    @foreach ( $hasilTes as $hasil)
    <div class="parent">
        <div class="top">
            @if($hasil->user->image != null)
                <img src="{{$hasil->$user->image}}" alt="" srcset="" class="responsive">
            @else
                <img src="{{asset('storage/profile/default.png')}}" alt="" srcset="" class="responsive">
            @endif
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
            <div class="button-wrapper">
                <button type="submit">
                   <h5>Simpan Hasil Test</h5>
                </button>
                <button type="submit">
                    <h5>Kirim Hasil Test</h5>
                </button>
            </div>
        </div>
    </div>
    @endforeach
    </div>

</body>
</html>

@endsection
