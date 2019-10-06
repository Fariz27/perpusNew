@extends('template')

@section('main')
  <div style="height:300px"> </div>
  <div id="anggota" class="masthead bg-light">
    <center><h2 class="text-daark">Detail Anggota</h2></center>

    

    <table class="lead table table-striped text-daark">
    <tr >
    <center>
    <img src="{{asset('images/'.$anggota->image)}}"  alt="img" width="200px" height="auto">
   </center>
    </tr>
    <br>
      <tr>
        <th>Nama</th>
        <td>{{ $anggota->nama_anggota }}</td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $anggota->tanggal_lahir }}</td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $anggota->jenis_kelamin }}</td>
      </tr>
      <tr>
        <th>No.Telp</th>
        <td>{{ $anggota->telp }}</td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td>{{ $anggota->alamat }}</td>
      </tr>
    </table>
    <center>
    <a href="http://localhost:8000/anggota" class=" btn btn-outline-daark btn-xl"><- Go Back</a>
    </center>
  </div>
@stop

