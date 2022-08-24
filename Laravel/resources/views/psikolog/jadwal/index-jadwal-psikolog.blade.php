@extends("layouts.psikolog")

@section('content')
<html>
   <head>
      <title>View Student Records</title>
      <style>
         .card{
            padding: 32px
         }
         .card-button{
            display: flex;
            flex-direction:row;
            justify-content: flex-end;
         }
         .bold{
            font-weight: 600;
         }
      </style>
   </head> 
   
   <body>
      <div class="card">
         <h2 style="font-weight:bold;">Jadwal Appointment</h2>
         <br>
            <table class="table">
               <tr class="bold">
                  <td>ID</td>
                  <td>Tanggal</td>
                  <td>Jam</td>
                  <td>Delete</td>
               </tr>
               @php
                  $nomor = 1;
               @endphp

               @foreach ($jadwalPsikolog as $jadwal)
               <tr>
                  <td>{{ $nomor }}</td>
                  @php
                     $nomor++;
                  @endphp
                  <td>{{ $jadwal->tanggal }}</td>
                  <td>{{ $jadwal->jam }}</td>
                  <td>
                     <form action= "/psikolog/jadwal/{{ $jadwal->id }}" method="post">
                     @csrf
                     @method('delete')
                     <input type="hidden" name="id" value="{{ $jadwal->id }}">
                     <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </table>
            <div class="card-button">
               <a href="/psikolog/jadwal/create" class="btn btn-primary">Tambah Jadwal</a>
            </div>
         </div>
   </body>
</html>
@endsection

