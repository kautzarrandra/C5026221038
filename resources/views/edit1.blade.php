@extends('master2')
@section('judulhalaman', 'Edit Data Minuman')

@section('konten')
    <br>
	<h3>Edit Data Minuman</h3>

	<a href="/minuman" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($minuman as $m)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->kodeminuman }}"> <br/>
        {{-- Merk --}}
        <div class="form-group row">
            <label for="merk" class="col-sm-2 control-label">Merk Minuman</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="merk" name="merk" class="form-control" value="{{ $m->merkminuman }}">
            </div>
        </div>
        {{-- Stock --}}
        <div class="form-group row">
            <label for="stock" class="col-sm-2 control-label">Stok Minuman</label>
            <div class="col-sm-8">
                <input type="text" required="required" id="stock" name="stock" class="form-control" value="{{ $m->stockminuman }}">
            </div>
        </div>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
