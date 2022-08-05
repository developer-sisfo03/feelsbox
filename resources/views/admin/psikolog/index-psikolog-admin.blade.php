@extends("layouts.admin")

@section('content')
    
    <table>
        <tr>
            <th>
                Nama
            </th>
            <th>
                Email
            </th>
            <th>
                Verifikasi
            </th>
        </tr>
        @foreach($psikolog as $p)
            @if($p->verified == 0)
                <tr>
                    <td>
                        {{$p->user->name}}
                    </td>
                    <td>
                        {{$p->user->email}}
                    </td>
                    <td>
                        @if($p->verified == 0)
                            <a href="/admin/psikolog/{{$p->id}}/verifikasi" class="btn btn-secondary">Verifikasi</a>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
@endsection