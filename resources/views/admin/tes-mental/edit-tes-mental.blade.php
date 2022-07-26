@extends('layouts.admin')

@section('content')
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="../css/admin/tes-mental/style2.css">
</head>
<body>
    <div class="parent">
        <form action="/admin/test-mental?id{{$tesMental->id}}&edit='true'" method="get">
            @csrf
            <input type="hidden" name="id" value="{{$tesMental->id}}">
            <input type="hidden" name="edit" value="true">
            <div class="title">
                 <h3>{{$tesMental->indikator}}</h3>
            </div>
            <div class="form-wrapper">
                <div class="form-edit">
                    <label for="">Soal&nbsp; </label>
                    <input type="text" name="soal" value="{{$tesMental->soal}}">
                </div>
                <div class="form-edit">
                    <label for="">Opsi 1</label>
                    <input type="text" name="opsi_1" value="{{$tesMental->opsi_1}}">
                </div>
                <div class="form-edit">
                    <label for="">Opsi 2</label>
                    <input type="text" name="opsi_2" value="{{$tesMental->opsi_2}}">
                </div>
                <div class="form-edit">
                    <label for="">Opsi 3</label>
                    <input type="text" name="opsi_3" value="{{$tesMental->opsi_3}}">
                </div>
                <div class="form-edit">
                    <label for="">Opsi 4</label>
                    <input type="text" name="opsi_4" value="{{$tesMental->opsi_4}}">
                </div>
            </div>
            <div class="button-section">
             <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
@endsection