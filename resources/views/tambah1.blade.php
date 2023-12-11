@extends('master2')
@section('judulhalaman', 'Tambah Data Minuman')

@section('konten')
    <br>
	<h3>Tambah Data Minuman</h3>

	<a href="/minuman" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/minuman/store" method="post">
		{{ csrf_field() }}
        {{-- Merk --}}
        <div class="form-group row">
            <label for="merk" class="col-sm-2 control-label">Merk Minuman</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="merk" name="merk" required="required" placeholder="Masukkan Merk Minuman">
            </div>
        </div>
        {{-- Stock --}}
        <div class="form-group row">
            <label for="stock" class="col-sm-2 control-label">Stok Minuman</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="stock" name="stock" required="required" placeholder="Masukkan Stok Minuman">
            </div>
        </div>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>

@endsection
