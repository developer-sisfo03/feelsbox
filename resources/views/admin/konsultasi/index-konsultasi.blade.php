@extends("layouts.admin")

@section('content')
  <link rel="stylesheet" href="../../css/admin/konsultasi/style.css">
  @foreach ($konsultasi as $k )
  <div class="booking d-flex justify-content-center ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a href="/admin/konsultasi/{{$k->id}}/edit" class="btn edit">Edit</a>
          </div>
          <div class="col-lg-4 text-center">
            <h3>Id : {{$k->id}}</h3>
          </div>
          <div class="col-lg-4 text-end">
            <form action="/admin/konsultasi/{{$k->id}}/delete" method="get">
              @csrf
              <button type="submit" class="btn btn-danger" disabled>Delete</button>
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
              <form action="/admin/konsultasi/{{$k->id}}" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="id" value="{{$k->id}}">
                  <input type="hidden" name="status" value="accept">
                  <button type="submit" class="btn btn-secondary">Setujui</button>
              </form>
            @else
              <form action="/admin/konsultasi/{{$k->id}}" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="id" value="{{$k->id}}">
                  <input type="hidden" name="status" value="cancel">
                  <button type="submit" class="btn btn-warning">Cancel</button>
              </form>
            @endif
        </div>
      </div>
    </div>
  @endforeach
@endsection