@extends('master2')
@section('judulhalaman', 'Edit Data Mahasiswa')

@section('konten')
    <br>
	<h3>Edit Data Mahasiswa</h3>

	<a href="/mahasiswa" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $m->NRP }}"> <br/>
        {{-- NRP --}}
        <div class="form-group row">
            <label for="nrp" class="col-sm-2 control-label">NRP</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="nrp" name="nrp" class="form-control" value="{{ $m->NRP }}">
            </div>
        </div>
        {{-- Nama --}}
        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{ $m->Nama }}">
            </div>
        </div>
        {{-- Jurusan --}}
        <div class="form-group row">
            <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="jurusan" name="jurusan" class="form-control" value="{{ $m->Jurusan }}">
            </div>
        </div>
        {{-- IPK --}}
        <div class="form-group row">
            <label for="ipk" class="col-sm-2 control-label">IPK</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="ipk" name="ipk" class="form-control" value="{{ $m->IPK }}">
            </div>
        </div>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
