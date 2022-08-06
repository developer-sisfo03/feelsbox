@extends('layouts.psikolog')

@section('content')

    <form action="/profile/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Gambar</label>
            <BR></BR>
                <input type="hidden" name="oldImage" value={{$user->image}}>
                @if($user->image != null)
                    <img style="width: 100px; height: 100px;" class="preview img-fluid" src="{{ asset('storage/'.$user->image) }}">
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
            
            <select name="" id="domisili">
            @if($user->domisili != null)
                <option value="{{$user->domisili}}">{{$user->domisili}}</option>
            @else
            @endif
            </select>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <input type="hidden" name="id" value="{{$user->id}}">
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

    <script>
        domisili = document.querySelector('#domisili');

        axios.get('http://dev.farizdotid.com/api/daerahindonesia/provinsi').then(response => {
            console.log(response.data.provinsi);
            response.data.provinsi.forEach(provinsi => {
                domisili.innerHTML += `<option value="${provinsi.nama}">${provinsi.nama}</option>`;
            });
        });
    </script>

@endsection
