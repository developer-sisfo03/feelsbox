@extends('layouts.user')

@section('content')
    <select name="tanggal" id="tanggal">
        <option value="">Pilih Tanggal</option>
        @foreach($tanggal as $j)
            <option value="{{$j}}" >{{$j}}</option>
        @endforeach
    </select>
    <button type="button" onclick="jadwalPsikolog()">Cari</button>

    <div>
        <table  id="hasil">

        </table>
    </div>

    <script src="/js/appointment.js"></script>
@endsection
