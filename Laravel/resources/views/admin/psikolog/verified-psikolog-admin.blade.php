@extends("layouts.admin")

@section('content')
<head>
    <link rel="stylesheet" href="../css/adminPsikolog/style.css">
</head>
<body>
   <div class="parent">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">
                Nama
            </th>
            <th scope="col">
                Email
            </th>
            <th scope="col">
                Verifikasi
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($psikolog as $p)
            @if($p->verified == 0)
                <tr>
                    <td>
                        {{$p->name}}
                    </td>
                    <td>
                        {{$p->email}}
                    </td>
                    <td>
                        @if($p->verified == 0)
                            <a href="/admin/psikolog/{{$p->id}}/verifikasi" class="btn btn-primary" style="font-size: 14px">Verifikasi</a>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    </div>
    </body>
@endsection