@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Edit Data Buku</h1>


<hr class="my-4">     

@foreach ($buku as $b)
<form action="/buku/update" method="POST" enctype="multipart/form-data">


@csrf

<input type="hidden" name="id_buku" value="{{ $b->id_buku }}">

<div class="form-group">


<label for="judul_buku">Judul Buku</label>


<input type="text" class="form-control" name="judul_buku" 


                    placeholder="Judul Buku" value="{{ $b->judul_buku }}">


</div>


<div class="form-group">


<label for="deskripsi">Deskripsi Buku</label>


<input type="text" class="form-control" name="deskripsi" 


                    placeholder="Deskripsi Buku" value="{{ $b->deskripsi }}">


</div>



<div class="form-group">


<label for="kategori">Kategori Buku</label>


<select class="form-control" id="kategori" name="kategori">
	

<!-- SEK KATEGORI URUSEN -->


</select>


</div>


<div class="form-group">


<label for="cover_img">Cover Buku</label>


<input type="file" name="cover_img">


</div>


<button type="submit" class="btn btn-primary">Simpan</button>


</form>
@endforeach


</div>


</div>


@endsection