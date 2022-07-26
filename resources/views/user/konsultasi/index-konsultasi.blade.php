@extends("layouts.user")

@section('content')
  <link rel="stylesheet" href="../../css/admin/konsultasi/style.css">
  @foreach ($konsultasi as $k )
  <div class="booking d-flex justify-content-center ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a href="/konsultasi/{{$k->id}}/edit" class="btn edit">Edit</a>
          </div>
          <div class="col-lg-4 text-center">
            <h3>Id : {{$k->id}}</h3>
          </div>
          <div class="col-lg-4 text-end">
            <form action="/konsultasi/{{$k->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
          </div>
        </div>
        <div class="data-user text-center">
          <div class="nama">
            <h3>Nama User : {{$k->user->name}}</h3>
          </div>
          <div class="email">
            <h3>Email : {{$k->user->email}}</h3>
          </div>
          <div class="tanggal-lahir">
            <h3>Tanggal Lahir : {{$k->user->tanggal_lahir}}</h3>
          </div>
          <div class="jenis-kelamin">
            <h3>Jenis Kelamin : {{$k->user->jenis_kelamin}}</h3>
          </div>
          <div class="alamat">
            <h3>Alamat : {{$k->user->domisili}}</h3>
          </div>
        </div>
        <hr class="garis">
        <div class="waktu text-center">
          <h5>{{$k->tanggal}} || {{$k->waktu}}</h5>  
        </div>
        <br>
        <div class="psikolog text-center">
          <h3>Psikolog : {{$k->psikolog->user->name}}</h3>
        </div>
        <br>
        <div class="aprrove-toogle text-center">
            @if($k->status == 0)
            <button type="button" class="btn btn-primary">
                Belum Diverifikasi
            </button>
            @else
            <button type="button" class="btn btn-success">
                Sudah Diverifikasi
            </button>
            @endif
        </div>
      </div>
    </div>
  @endforeach
@endsection