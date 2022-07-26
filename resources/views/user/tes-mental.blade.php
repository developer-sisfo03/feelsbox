<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/tes-mental/style.css">
    <title>Tes Mental</title>
  </head>
  <body>
    @if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
    @else
    <div class="top text-center">
        <div class="main container">
            <h1 class="title">Personality Test</h1>
            <div class="row  mt-4">
                <div class="col-lg-4">
                    <div class="col">
                        <img src="img/tes-mental/complete-test.png" alt="" srcset="">
                        <h4>Complete the Test</h4>
                        <p>Be yourself and answer honestly to find out your personality type.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col">
                        <img src="img/tes-mental/unlock.png" alt="" srcset="">
                        <h4>View Detailed Results</h4>
                        <p>Learn how your personality type influences many areas of your life.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div class="col">
                         <img src="img/tes-mental/view-result.png" alt="" srcset="">
                        <h4>Unlock Your Potential</h4>
                        <p>Grow into the person you want to be with your optional Premium Profile.</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <br>
    <br> --}}
    <div class="questions">
        <form class="container" action="/tes-mental" method="post">
        @csrf
            @php($indikator = '')
            @foreach ($tesMentals as $tes)
                @if($indikator != $tes->indikator)
                    <h3 class="question-title">{{ucwords($tes->indikator)}}</h3>
                    @php($indikator = $tes->indikator)
                @elseif($indikator == $tes->indikator)
                    <h3></h3>
                @endif
                <div id="1" class="question">
                    <h3>{{$tes->soal}}</h3>   
                        <div class="answer">
                            <input type="radio" name="{{$tes->nomor_soal}} {{$tes->indikator}}" value="{{ $tes->opsi_1 == "Ya" ? $tes->opsi_1 : $tes->point_1 }}">
                            <label for="{{$tes->nomor_soal}} {{$tes->indikator}}">{{$tes->opsi_1}}</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="{{$tes->nomor_soal}} {{$tes->indikator}}" value="{{ $tes->opsi_2 == "Tidak" ? $tes->opsi_2 : $tes->point_2 }}"> 
                            <label for="{{$tes->nomor_soal}} {{$tes->indikator}}">{{$tes->opsi_2}}</label>
                        </div>
                        @if($tes->opsi_3 != null)                           
                            <div class="answer">
                                <input type="radio" name="{{$tes->nomor_soal}} {{$tes->indikator}}" value="{{$tes->point_3}}">
                                <label for="{{$tes->nomor_soal}} {{$tes->indikator}}">{{$tes->opsi_3}}</label>
                            </div>
                        @endif                      
                        @if($tes->opsi_4 != null)                           
                            <div class="answer">
                                <input type="radio" name="{{$tes->nomor_soal}} {{$tes->indikator}}" value="{{$tes->point_4}}">
                                <label for="{{$tes->nomor_soal}} {{$tes->indikator}}">{{$tes->opsi_4}}</label>
                            </div>
                        @endif
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>