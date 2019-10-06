@extends('template')
@section('main')
<div style="height:300px"> </div>
  <div id="anggota" class="masthead bg-light">
    <center><h2 class="text-dark">Detail Peminjaman</h2></center>

    

    <table class="lead table table-striped text-daark">
      <tr>
        <th>Nama</th>
        <td>{{ !empty($pinjam->anggota->id) ?
                  $pinjam->anggota->nama_anggota : '-' }}</td>
      </tr>
      <tr>
        <th>Buku</th>
        <td>{{ !empty($pinjam->buku->id) ?
                  $pinjam->buku->judul : '-' }}</td>
      </tr>
      <tr>
        <th>Tgl Pinjam</th>
        <td>{{ $pinjam->tanggal_pinjam }}</td>
      </tr>
      <tr>
        <th>Tgl Kembali</th>
        <td>{{ $pinjam->tanggal_kembali }}</td>
      </tr>
    </table>
    <center>
    <a href="http://localhost/perpus1/public/pinjam" class=" btn btn-outline-dark btn-xl"><- Go Back</a>
    </center>
  </div>
@stop

