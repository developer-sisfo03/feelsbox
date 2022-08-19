@extends("layouts.admin")

@section('content')
    <head>
        <link rel="stylesheet" href="../css/psikolog/daftar-verifikasi.css">
    </head>
    <body>
        <div class="parent">
            <a href="/admin/psikolog/verifikasi" class="btn btn-danger" style="font-size:14px">Belum terverifikasi</a>
            <div class="table-responsive">
                <table class="table">
                            <tr>
                                <th scope="col">
                                    Gambar
                                </th>
                                <th scope="col">
                                    Nama
                                </th>
                                <th scope="col">
                                    Email
                                </th>
                                <th scope="col">
                                    Tanggal Lahir
                                </th>
                                <th scope="col">
                                    Domisili
                                </th>
                            </tr>
                     <tbody>
                    @foreach($psikolog as $p)
                        @if($p->verified == 1)
                            <tr>

                                <td>
                                    @if($p->gambar != null)
                                        <img src="{{asset('storage/'.$p->gambar)}}" width="100px" height="100px">
                                    @else
                                        <img src="{{asset('storage/profile/default.png')}}" width="100px" height="100px">
                                    @endif
                                <td>
                                    {{$p->name}}
                                </td>
                                <td>
                                    {{$p->email}}
                                </td>
                                <td>
                                    {{$p->tanggal_lahir}}
                                </td>
                                <td>
                                    {{$p->domisili}}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </body>
@endsection