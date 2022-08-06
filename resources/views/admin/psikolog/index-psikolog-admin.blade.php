@extends("layouts.admin")

@section('content')
    <a href="/admin/psikolog/verifikasi">Verifikasi Psikolog</a>
    <table>
        <tr>
            <th>
                Gambar
            </th>
            <th>
                Nama
            </th>
            <th>
                Email
            </th>
            <th>
                Tanggal Lahir
            </th>
            <th>
                Domisili
            </th>
        </tr>
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
                        {{$p->user->name}}
                    </td>
                    <td>
                        {{$p->user->email}}
                    </td>
                    <td>
                        {{$p->user->tanggal_lahir}}
                    </td>
                    <td>
                        {{$p->user->domisili}}
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
@endsection