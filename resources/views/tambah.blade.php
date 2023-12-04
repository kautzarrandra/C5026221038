@extends('master2')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')
    <br>
	<h3>Tambah Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/pegawai/store" method="post">
		{{ csrf_field() }}
        {{-- Nama --}}
        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama" required="required">
            </div>
        </div>
        {{-- Jabatan --}}
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan" name="jabatan" required="required">
            </div>
        </div>
        {{-- Umur --}}
        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label">Umur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="umur" name="umur" required="required">
            </div>
        </div>
        {{-- Alamat --}}
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="alamat" name="alamat" required="required">
            </div>
        </div>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>

@endsection
