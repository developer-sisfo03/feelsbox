@extends('layouts.user')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/userHome/style.css">
</head>
<body>
    
    <h1 class="greet">Selamat datang di Feelsbox, {{auth()->user()->name}}!</h1>
    <div class="container" >
        <div class="row">
            <div class=" col card description">
                <img src="../img/logo.png" alt="logo" class="responsive-img">
                <div class="description-content">
                    <h1 class="card-title">Apa itu Feelsbox?</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem consequatur voluptates asperiores aspernatur autem impedit magni perspiciatis nisi molestiae laboriosam.</p>
                </div>
            </div>
        </div>
        <div class="row tablet" style="column-gap:10px">
            <div class="card total-control">
                <div class="d-flex">
                    <h1 class="card-title">Total Control</h1> 
                </div>
                <h1 class="score">7</h1>
                <h6 class="result">times for the last 2 weeks</h6>
            </div>
            <div class="card recent-test">
                <div class="d-flex">
                    <h1 class="card-title">Recent Test </h1> 
                </div>
                <h1 class="score">27</h1>
                <h6 class="result">Depresi Ringan</h6>
            </div>
        </div>
    </div>
</body>
</html>
@endsection