@extends('layouts.user')
@section('content')

    {{-- modal --}}


    <div class="container">
        @foreach($reviews as $r)
            <div class="review">
                <p>Id Pemesanan: {{$r->id_pemesanan}}</p>
                <p>Nama Psikolog: {{$r->psikolog_id->name}}</p>
                <p>Tanggal: {{$r->tanggal}}</p>
                <p>Jam: {{$r->waktu}}</p>
                @if($r->review->count() == 0)
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Review
                    </button>
                @else
                @foreach($r->review as $rev)
                    <p>Review: {{$rev->review}}</p>
                @endforeach
                @endif
            </div>
        @endforeach
    </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
             </div>
        </div>
    </div>

@endsection