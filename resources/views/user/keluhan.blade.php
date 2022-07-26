<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <link rel="stylesheet" href="css/keluhan/style.css">
</head>
<body>
    <div class="wrap">
        <div class="parent">
            <div class="container">
                <p>Keluhan</p>
                <form action="/keluhan" method="post">
                    {{-- buat form keluhan menggunakan text--}}
                    @csrf
                    {{-- hiden input id --}}
                    <input type="hidden" name="id" value="{{auth()->user()->id}}">
                    <div class="form-group">
                        <label for="keluhan"></label>
                        <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Masukkan keluhan anda disini ..."></textarea>
                    </div>
                    <div class="button-section">
                        <button type="submit" class="submitButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom-page">
                <!-- <h1>Hello</h1> -->
        </div>
    </div>
</body>
</html>