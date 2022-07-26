@extends("layouts.admin")

@section('content')
  <link rel="stylesheet" href="../../../css/admin/konsultasi/style.css">
  <div class="booking d-flex justify-content-center ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a href="/admin/konsultasi/{{$konsultasi->id}}/edit" class="btn edit">Edit</a>
          </div>
          <div class="col-lg-4 text-center">
            <h3>Id : {{$konsultasi->id}}</h3>
          </div>
          <div class="col-lg-4 text-end">
            <form action="/admin/konsultasi/{{$konsultasi->id}}/delete" method="get">
              @csrf
              <button type="submit" class="btn btn-danger" disabled>Delete</button>
            </form>
          </div>
        </div>
        <div class="data-user text-center">
          <div class="nama">
            <h3>Nama User : {{$konsultasi->user->name}}</h3>
          </div>
          <div class="email">
            <h3>Email : {{$konsultasi->user->email}}</h3>
          </div>
          <div class="tanggal-lahir">
            <h3>Tanggal Lahir : {{$konsultasi->user->tanggal_lahir}}</h3>
          </div>
          <div class="jenis-kelamin">
            <h3>Jenis Kelamin : {{$konsultasi->user->jenis_kelamin}}</h3>
          </div>
          <div class="alamat">
            <h3>Alamat : {{$konsultasi->user->domisili}}</h3>
          </div>
        </div>
        <hr class="garis">
        <div class="waktu text-center">
          <h5>{{$konsultasi->tanggal}} || {{$konsultasi->waktu}}</h5>  
        </div>
        <br>
        <div class="psikolog text-center">
          <h3>Psikolog : {{$konsultasi->psikolog->user->name}}</h3>
        </div>
        <br>
        <div class="aprrove-toogle text-center">
          @if($konsultasi->status == 0)
              <form action="/admin/konsultasi/{{$konsultasi->id}}" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="id" value="{{$konsultasi->id}}">
                  <input type="hidden" name="status" value="accept">
                  <button type="submit" class="btn btn-secondary">Setujui</button>
              </form>
            @else
              <form action="/admin/konsultasi/{{$konsultasi->id}}" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="id" value="{{$konsultasi->id}}">
                  <input type="hidden" name="status" value="cancel">
                  <button type="submit" class="btn btn-warning">Cancel</button>
              </form>
            @endif
        </div>
      </div>
    </div>
@endsection