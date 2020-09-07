@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Edit Data Anggota</h1>


<hr class="my-4">     

@foreach ($anggota as $ang)
<form action="/anggota/update" method="POST" enctype="multipart/form-data">

@csrf

<input type="hidden" name="id_anggota" value="{{ $ang->id_anggota }}">


<div class="form-group">


<label for="nama">Nama Anggota</label>


<input type="text" class="form-control" id="nama" name="nama_anggota"


                    placeholder="Nama Anggota" value="{{ $ang->nama_anggota }}">


</div>


<div class="form-group">


<label for="alamat">Alamat</label>


<input type="text" class="form-control" id="alamat" name="alamat"


                     placeholder="Alamat" value="{{ $ang->alamat }}">


</div>


<div class="form-group">


<label for="jenis_kelamin">Jenis Kelamin</label>


<select class="form-control" id="jenis_kelamin" 


                    name="jenis_kelamin">


<option value="laki-laki">Laki-laki</option>


<option value="perempuan">Perempuan</option>


</select>


</div>


<div class="form-group">


<label for="email">Alamat Email</label>


<input type="email" class="form-control" id="email" name="email"


                    placeholder="Email" value="{{ $ang->email }}">


</div>


<div class="form-group">


<label for="no_telp">No. HP</label>


<input type="text" class="form-control" id="no_telp" name="no_telp"


                   placeholder="No. HP" value="{{ $ang->no_telp }}">


</div>


<button type="submit" class="btn btn-primary">Simpan</button>


</form>
@endforeach

</div>


</div>


@endsection