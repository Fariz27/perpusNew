@extends('template')
@section('main')

<div style="height:300px"> </div>
<div id="buku" class="masthead bg-light text-center text-dark mb-0"> 
<h2>Edit Buku</h2>
<center>
<div class="divider-custom divider-dark">
    <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
    <div class="divider-custom-line"></div>
</div>
<form action="{{ url('api/update/buku/' . $buku->id) }}" method="post" class="lead" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="judul" class="control-label text-dark">Judul  :   <input name="judul" type="text" class="form-control" value="{{$buku->tittle}}"></label>
</div>

<div class="form-group">
<label for="genre" class="control-label text-dark">Genre  : <input name="genre" type="text"class="form-control" value="{{$buku->genre}}"></label>
</div>

<div class="form-group">
<label for="stok" class="control-label text-dark">Stok  : <input name="stok" type="text"class="form-control" value="{{$buku->stock}}"></label>
</div>

<div class="form-group">
<label for="image" >Image
<input type="file" class="form-control" name="image"></label>
</div>
<button type="submit" class="btn btn-outline-dark btn-xl">Submit</button>
<a href="http://localhost/perpus/public/buku" class="btn btn-outline-dark btn-xl">Cancel</a>
</form>
</div>
</center>

@stop