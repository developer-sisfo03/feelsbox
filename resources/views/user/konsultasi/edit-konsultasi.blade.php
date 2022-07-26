@extends('layouts.user')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment</title>
    <link rel="stylesheet" href="../../css/appointment/style.css">
</head>
<body>
    <div class="parent">
        <div class="parent-wrapper">
        <form action="/konsultasi/{{$konsultasi->id}}" method="post">
            @csrf
            @method('put')
                <input type="hidden" name="psikolog_id" value="{{$konsultasi->psikolog_id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <h1>Edit Appointment Id {{$konsultasi->id}}</h1>
                <div class="tanggal-jam-wrapper">
                    <div class="tanggal">
                        <p>Tanggal</p>
                        <input type="date" name="tanggal" value="{{$konsultasi->tanggal}}">
                    </div>
                    <div class="jam">
                        <p>Jam</p>
                        <input type="time" name="jam" value="{{$konsultasi->waktu}}">
                    </div>
                    <div class="button">
                        <button type="submit">Booking</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection