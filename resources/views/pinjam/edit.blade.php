@extends('template')
@section('main')
<div style="height:300px"> </div>
<div id="anggota" class="masthead bg-light text-center text-dark mb-0"> 
<h2>Edit Anggota</h2>
<center>
<div class="divider-custom divider-dark">
    <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
    <div class="divider-custom-line"></div>
</div>
<form action="{{ url('update/pinjam/' . $pinjam->id) }}" method="post" class="lead" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="id_peminjam" class="control-label text-light">Nama :</label>
    <select class="form-control col-md-4 col-form-label text-center" type="text" name="id_peminjam">
    @if(!empty($anggota))
    @foreach ($anggota as $anggota)
    <option value="{{$anggota->id}}">{{$anggota->nama_anggota}}</option>
    @endforeach
    </select>
    @else
    <p>Tidak ada Kelas.</p>
    @endif
</div>

<div class="form-group">
<label for="id_buku" class="control-label text-light">Buku :</label>
    <select class="form-control col-md-4 col-form-label text-center" type="text" name="id_buku">
    @if(!empty($buku))
    @foreach ($buku as $buku)
    <option value="{{$buku->id}}">{{$buku->judul}}</option>
    @endforeach
    </select>
    @else
    <p>Tidak ada Kelas.</p>
    @endif
</div>

<div class="form-group">
<label for="tanggal_pinjam" class="control-label text-dark">Tgl Pinjam :   <input name="tanggal_pinjam" type="date" class="form-control "value="{{$pinjam->tanggal_pinjam}}"></label>
</div>
<div class="form-group">
<label for="tanggal_pinjam" class="control-label text-dark">Tgl Kembali :   <input name="tanggal_kembali" type="date" class="form-control "value="{{$pinjam->tanggal_kembali}}"></label>
</div>

<button type="submit" class="btn btn-outline-dark btn-xl">Submit</button>
<a href="http://localhost/perpus1/public/pinjam" class="btn btn-outline-dark btn-xl">Cancel</a>
</form>
</div>
</center>

@stop