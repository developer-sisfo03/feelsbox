@extends("layouts.psikolog")

@section('content')
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Booking</h3>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Profile</th>
                                    <th>Nama Client</th>
                                    <th>Nama Psikolog</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($booking) == 0)
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak Client Booking Saat Ini</td>
                                    </tr>
                                @else
                                    @foreach($booking as $b)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                @if($b->image != null)
                                                    <img class="myImg" src="{{asset('storage/'.$b->image)}}" width="100px" height="100px" alt="">]
                                                @else
                                                    <img class="myImg" src="{{asset('storage/profile/default.png')}}" width="100px" height="100px" alt="">
                                                @endif
                                            </td>
                                            <td>{{$b->client_id->name}}</td>
                                            <td>{{$b->psikolog_id->name}}</td>
                                            <td>{{$b->tanggal}}</td>
                                            <td>{{$b->waktu}}</td>
                                            <td>
                                                <a href="/psikolog/booking/{{$b->id}}/verifikasi" class="btn btn-warning">Setuju</a>
                                                <button id="tolak" class="btn btn-danger" onclick="tolak({{$b->id}})">Tolak</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    var modal = document.getElementById("myModal");

    var img = document.getElementsByClassName("myImg");
    console.log(img);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    for (var i = 0; i < img.length; i++) {
        img[i].onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
    function tolak(id) {
        console.log(id)
        // alert jika menekan iya maka redirect ke halaman /psikolog/{id}/tolak
        if (confirm("Apakah anda yakin ingin menolak booking ini?")) {
            window.location.href = "/psikolog/booking/"+id+"/delete";
        }
    }

    </script>

@endsection