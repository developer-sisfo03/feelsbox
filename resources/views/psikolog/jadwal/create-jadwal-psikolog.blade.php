@extends('layouts.psikolog')

@section('content')

    <form action="/psikolog/jadwal" method="post">
        @csrf
        <input type="hidden" name="psikolog_id" value="{{$id}}">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" required>
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="time" class="form-control" id="jam" name="jam" placeholder="Jam" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
