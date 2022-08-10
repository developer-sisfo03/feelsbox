@extends("layouts.admin")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="../css/landing-page/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="child-wrapper">
            <div class="box">
             <h1>Visi</h1>
             <p>{!! $landingPages->visi !!}</p>
            </div>
        </div>
        <div class="child-wrapper">
            <div class="box">
              <h1>Misi</h1>
              <p>{!! $landingPages->misi !!}</p>
            </div>
        </div>
        <div class="child-wrapper">
            <div class="box">
               <h1>About</h1>
                <p>{!! $landingPages->about !!}</p>
            </div>
        </div>
        <div class="child-wrapper">
            <div class="box">
                 <h1>Direct</h1>
                 <p>{!! $landingPages->direct !!}</p>
            </div>    
        </div>
        <div class="child-wrapper">
            <div class="box">
                <h1>Pencapaian</h1>
                <p>{!! $landingPages->pencapaian !!}</p>
            </div>
        </div>   
    </div>
    <div class="button-edit">
        <button>
             <a href="/admin/landing-page/feelsbox/edit">Edit</a>
        </button>
    </div>
</body>
</html>
@endsection