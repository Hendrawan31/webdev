@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Edit Kategori Buku</h1>


<hr class="my-4">     

@foreach ($kategori as $kat)
<form action="/kategori/update" method="POST" enctype="multipart/form-data">

@csrf
<input type="hidden" name="kategori" value="{{ $kat->kategori }}">


<div class="form-group">


<label for="deskripsi">Deskripsi</label>


<input type="text" class="form-control" id="deskripsi" 


                    name="deskripsi" placeholder="Deskripsi" 
value="{{ $kat->deskripsi }}">


</div>


<button type="submit" class="btn btn-primary">Simpan</button>


</form>
@endforeach

</div>


</div>


@endsection