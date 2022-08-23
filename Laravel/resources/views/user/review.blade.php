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
                    <button onClick="review('{{$r}}')" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <form id="form" action="" method="post">
                @csrf
                <input type="hidden" name="user_id" id="id_pemesanan" value={{auth()->user()->id}}>
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="modalBody" class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    function review(data){
        var data = JSON.parse(data);
        console.log(data);
        var form = document.getElementById('form');
        form.action = "/review/"+data.id+"/save";
        var modalLabel = document.getElementById('modalLabel');
        modalLabel.innerHTML = "ID Pemesanan "+data.id_pemesanan;
        var modalBody = document.getElementById('modalBody');
        modalBody.innerHTML = `
            <div class="mb-3">
                <h5>Nama Psikolog ${data.psikolog_id.name}</h5>
                <h5>Tanggal ${data.tanggal}</h5>
                <h5>Jam ${data.waktu}</h5>
                <label for="review" class="form-label">Berikan Review</label>
                <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
            </div>
        `;
    }
</script>

@endsection