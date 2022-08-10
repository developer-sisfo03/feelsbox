@extends('layouts.admin')

@section('content')
    @php($indikator = '')
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="../css/admin/tes-mental/style.css">
    </head>
    <body>
    <div class="parent-wrapper">
    @foreach ($tesMental as $tes)
        @if($indikator != $tes->indikator)
            <h3 class="question-title">{{ucwords($tes->indikator)}}</h3>
            @php($indikator = $tes->indikator)
        @elseif($indikator == $tes->indikator)
            <h3></h3>
        @endif
        <div class="parent">
            <h5 class="number">{{$tes->id}}</h5>
            <p>{{$tes->soal}}</p>
            <button type="submit" class="button">
                <a href="/admin/test-mental?id={{$tes->id}}">Edit</a>
            </button>
        </div>
        <br>
    @endforeach
    </div>
    </body>

@endsection