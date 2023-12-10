@extends('master2')
@section('judulhalaman', 'Data Minuman')

@section('konten')
    <br>
    <h3>Data Minuman</h3>

    <a href="/minuman/tambah" class="btn btn-primary mb-3"> + Tambah Minuman </a>
    <br>
    <br>
    <p>Cari Data Minuman :</p>
    <form action="/minuman/cari" method="GET">
	    <input class="form-control" type="text" name="cari" placeholder="Cari Minuman" value="{{ old('cari', isset($cari) ? $cari : '') }}">
	    <input type="submit" value="CARI" class="btn btn-info">
    </form>

    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Minuman</th>
            <th>Merk Minuman</th>
            <th>Stok Minuman</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($minuman as $m)
            <tr>
                <td>{{ $m->kodeminuman }}</td>
                <td>{{ $m->merkminuman }}</td>
                <td>{{ $m->stockminuman }}</td>
                <td>{{ $m->tersedia }}</td>
                <td>
                    <a href="/minuman/edit/{{ $m->kodeminuman }}" class="btn btn-warning">Edit</a>
                    <a href="/minuman/hapus/{{ $m->kodeminuman }}" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
