<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment</title>
    <link rel="stylesheet" href="../css/appointment/style.css">
</head>
<body>
    <div class="parent">
        <div class="parent-wrapper">
            <form action="/appointment/{{$psikolog->slug}}" method="post">
                @csrf
                <input type="hidden" name="psikolog_id" value="{{$psikolog->id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <h1>Booking an Appointment</h1>
                <div class="tanggal-jam-wrapper">
                    <div class="tanggal">
                        <p>Tanggal</p>
                        <input type="date" name="tanggal" value="">
                    </div>
                    <div class="jam">
                        <p>Jam</p>
                        <input type="time" name="jam" value="">
                    </div>
                    <div class="button">
                        <button type="submit">Booking</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>