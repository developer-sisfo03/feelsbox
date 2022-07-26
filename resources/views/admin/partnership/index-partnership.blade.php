<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partnership</title>
</head>
<body>
    @foreach($partnerships as $partner)
    <h1>{{$partner->name_partnership}}</h1>
    <img src="{{asset('storage/'.$partner->image_partnership)}}" alt="" srcset="">
    <a href="/admin/partnership/{{$partner->slug}}/edit">Edit</a>
    @endforeach
</body>
</html>