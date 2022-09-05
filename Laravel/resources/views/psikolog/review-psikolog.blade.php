<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review</title>
  </head>
  <body>
    <table>
      @foreach($reviews as $r)
      <tr>
        <td>{{$r->id_pemesanan}}</td>
        <td>{{$r->psikolog_id->name}}</td>
        <td>{{$r->tanggal}}</td>
        <td>{{$r->waktu}}</td>
        <td>
        @foreach($r->review as $rev)
            <p>{{$rev->review}}</p>
        @endforeach
      @endforeach
      </td>
    </table>
  </body>
    