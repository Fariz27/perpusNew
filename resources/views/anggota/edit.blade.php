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
<form action="{{ url('update/anggota/' . $anggota->id) }}" method="post" class="lead" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="nama_anggota" class="control-label text-dark">Nama  :   <input name="nama_anggota" type="text" class="form-control" value="{{$anggota->nama_anggota}}"></label>
</div>
<div class="form-group">
<label for="tanggal_lahir" class="control-label text-dark">Tanggal Lahir  : <input name="tanggal_lahir" type="date"class="form-control" value="{{$anggota->tanggal_lahir}}"></label>
</div>
<div class="form-group">
<label for="jenis_kelamin" class="control-label text-dark">Jenis Kelamin :</label>
<br>
@if ($anggota->jenis_kelamin=="P")
<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active"  for="jenis_kelamin">
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked> Perempuan
    </label>

    <label class="btn btn-secondary "  for="jenis_kelamin">
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-Laki
    </label>
</div>
@elseif ($anggota->jenis_kelamin=="L")
<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary "  for="jenis_kelamin">
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> Perempuan
    </label>

    <label class="btn btn-secondary active"  for="jenis_kelamin">
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked> Laki-Laki
    </label>
</div>
@endif

<div class="form-group">
<label for="telp" class="control-label text-dark">No.Telp  : <input name="telp" type="text"class="form-control" value="{{$anggota->telp}}"></label>
</div>

<div class="form-group">
<label for="alamat" class="control-label text-dark">Alamat  : <input name="alamat" type="text"class="form-control" value="{{$anggota->alamat}}"></label>
</div>

<div class="form-group">
<label for="image" >Image
<input type="file" class="form-control" name="image"></label>
</div>
</div>
<button type="submit" class="btn btn-outline-dark btn-xl">Submit</button>
<a href="http://localhost/perpus/public/anggota" class="btn btn-outline-dark btn-xl">Cancel</a>
</form>
</div>
</center>

@stop