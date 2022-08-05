@extends('layouts.psikolog')

@section('content')

    <form action="psikolog/setting" method="post">
        @csrf
        {{-- foto --}}
        <div class="form-group">
            <label for="image">Gambar</label>
            <BR></BR>
                <input type="hidden" name="oldImage" value={{$psikolog->image}}>
                @if($psikolog->image != null)
                    <img style="width: 100px; height: 100px;" class="preview img-fluid" src="{{ asset('storage/profile'.$psikolog->image) }}">
                @else
                    <img style="width: 100px; height: 100px;" class="preview img-fluid" src="{{ asset('storage/profile/default.png') }}">
                @endif
                <input type="file" name="image" class="form-control" id="image" onChange="previewImage()">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" value="{{$user->jenis_kelamin}}">
        </div>
        <div class="form-group">
            <label for="">Domisili</label>
            <input type="text" class="form-control" name="domisili" value="{{$user->domisili}}">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <script>
        function previewImage() {
            const input = document.querySelector('#image');
            const image = document.querySelector('.preview');

            const file = input.files[0];

            image.style.display = 'block';

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                image.src = '';
            }
        }
    </script>

@endsection
