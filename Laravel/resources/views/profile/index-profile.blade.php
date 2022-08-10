@extends('layouts.psikolog')

@section('content')
    <h1>Foto</h1>
    @if ($user->image != null)
        <img width="50px" height="50px" src="{{asset('storage/'.$user->image)}}" alt="">
    @else
        <img width="50px" height="50px"src="{{asset('storage/profile/default.png')}}" alt="">
    @endif
    <h1>Nama</h1>
    <p>{{$user->name}}</p>
    <h1>Email</h1>
    <p>{{$user->email}}</p>
    <h1>Jenis Kelamin</h1>
    <p>{{$user->jenis_kelamin}}</p>
    <h1>Domisili</h1>
    <p>{{$user->domisili}}</p>
    <a href="/profile/edit">
        <button class="btn  btn-primary">Edit</button>
    </a>
@endsection
