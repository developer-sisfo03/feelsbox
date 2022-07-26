@extends("layouts.admin")

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="/admin/landing-page/feelsbox/" method="post">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Visi</h5>
                <input type="hidden" name="visi" id="visi" value="{{$landingPage->visi}}">
                <trix-editor input="visi"></trix-editor>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Misi</h5>
                <input type="hidden" name="misi" id="misi" value="{{$landingPage->misi}}">
                <trix-editor input="misi"></trix-editor>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">About</h5>
                <input type="hidden" name="about" id="about" value="{{$landingPage->about}}">
                <trix-editor input="about"></trix-editor>
            </div>
        </div>
        <div class="card">
          <div class="card-body">
              <h5 class="card-title">Direct</h5>
              <input type="hidden" name="direct" id="direct" value="{{$landingPage->direct}}">
              <trix-editor input="direct"></trix-editor>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
              <h5 class="card-title">Pencapaian</h5>
              <input type="hidden" name="pencapaian" id="pencapaian" value="{{$landingPage->pencapaian}}">
              <trix-editor input="pencapaian"></trix-editor>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</body>
@endsection