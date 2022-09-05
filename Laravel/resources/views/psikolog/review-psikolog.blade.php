@extends('layouts.psikolog')
@section('content')

    {{-- modal --}}

    <head>
        <link rel="stylesheet" href="../css/riwayat/style.css">
    </head>
    <body>
        <div class="container" style="padding:32px;">
            <div class="row card-section">
                @foreach($datas as $r) 
                <div class="container card p-4">     
                    <div class="row">
                        <div class="col bold">
                            <p>Id Pemesanan</p>
                            <p>Nama Client</p>
                            <p>Tanggal</p>
                            <p>Waktu</p>
                            <p>Review</p>
                        </div>   
                        <div class="col" id="parenthes">
                        </div>
                        <div class="col">
                            <p>{{$r->id_pemesanan}}</p>
                            <p>{{$r->client_id->name}}</p>
                            <p>{{$r->tanggal}}</p>
                            <p>{{$r->waktu}}</p>
                            @foreach($r->review as $rev)
                                <p>{{$rev->review}}</p>
                            @endforeach
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
</body>

@endsection