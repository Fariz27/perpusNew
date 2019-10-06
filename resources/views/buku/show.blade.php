@extends('template')

@section('main')

<div style="height:300px"> </div>
  <div id="buku" class="masthead bg-light">
    <center><h2 class="text-dark">Detail Buku</h2></center>

    

    <table class="lead table table-striped text-dark">
    <tr >
    <center>
    <img src="{{asset('images/'.$buku->image)}}"  alt="img" width="200px" height="auto">
   </center>
    </tr>
    <br>
      <tr>
        <th>Judul</th>
        <td>{{ $buku->judul }}</td>
      </tr>
      <tr>
        <th>Pengarang</th>
        <td>{{ $buku->pengarang }}</td>
      </tr>
      <tr>
        <th>Genre</th>
        <td>{{ $buku->genre }}</td>
      </tr>
      <tr>
        <th>Stok</th>
        <td>{{ $buku->stok }}</td>
      </tr>
    </table>
    <center>
    <a href="http://localhost:8000/buku" class=" btn btn-outline-daark btn-xl"><- Go Back</a>
    </center>
  </div>
@stop

