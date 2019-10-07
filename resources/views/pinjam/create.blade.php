@extends('template')
@section('main')
<div style="height:300px"> </div>
<div id="pinjam" class="masthead bg-light text-center text-dark mb-0"> 
<h2>Tambah Pinjam</h2>
<center>
<div class="divider-custom divider-dark">
    <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
    <div class="divider-custom-line"></div>
</div>
<form action="{{ url('api/pinjam') }}" method="post" class="lead">
@csrf

<div class="form-group">
<label for="idpeminjam" class="control-label text-secondary">Nama :</label>
    <select class="form-control col-md-4 col-form-label text-center" type="text" name="idpeminjam">
    @if(!empty($anggota))
    @foreach ($anggota as $anggota)
    <option value="{{$anggota->id}}">{{$anggota->name}}</option>
    @endforeach
    </select>
    @else
    <p>Tidak ada Kelas.</p>
    @endif
</div>
<div class="form-group">
    <label for="jumlahbuku" class="control-label text-secondary">Jumlah Buku :</label><br>
    <input type="number" name="jumlahbuku" class="control-label text-secondary">
</div>
<div class="form-group">
<label for="idbuku" class="control-label text-secondary">Buku :</label>
    <select class="form-control col-md-4 col-form-label text-center" type="text" name="idbuku">
    @if(!empty($buku))
    @foreach ($buku as $buku)
    <option value="{{$buku->id}}">{{$buku->tittle}}</option>
    @endforeach
    </select>
    @else
    <p>Tidak ada Kelas.</p>
    @endif
</div>
<div class="form-group">
<label for="tanggalkembali" >Tgl Kembali<input type="date" class="form-control" name="tanggalkembali"></label>
</div>
<button type="submit" class="btn btn-outline-dark btn-xl">Submit</button>
<a href="http://localhost:8000/pinjam" class="btn btn-outline-dark btn-xl">Cancel</a>
</form>

</center>
</div>
@stop