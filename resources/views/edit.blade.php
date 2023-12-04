@extends('master2')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')
    <br>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        {{-- Nama --}}
        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        {{-- Jabatan --}}
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="jabatan" name="jabatan" class="form-control" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        {{-- Umur --}}
        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label">Umur</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="umur" name="umur" class="form-control" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        {{-- Alamat --}}
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="alamat" name="alamat" class="form-control" value="{{ $p->pegawai_alamat }}">
            </div>
        </div>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
