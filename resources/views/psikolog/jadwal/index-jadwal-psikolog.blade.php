@extends("layouts.psikolog")

@section('content')
<html>
   <head>
      <title>View Student Records</title>
      <link href="../psikolog/"
   </head> 
   
   <body>
   {{-- button tambah jadwal --}}
    <a href="/psikolog/jadwal/create" class="btn btn-primary">Tambah Jadwal</a>
    <br>
    <br>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>tangal</td>
            <td>time</td>
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
   </body>
</html>
@endsection

