@extends('layouts.user')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/back-again/style.css">
    </head>
    <body>
        <div class="parent">
            <h1>Kesempatan mengakses tes mental anda telah habis</h1>
            <div class="image">
                <img src="img/access-denied.svg" alt="" class="responsive">
            </div>
             <p>{{session('warning')}} </p>
        </div>
    </body>
   
@endsection