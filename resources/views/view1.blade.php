@extends('master2')
@section('judulhalaman', 'Lihat Data Mahasiswa')

    @section('konten')
	<br>
	<h3>Data Mahasiswa</h3>

	<br/>

    @foreach($mahasiswa as $m)
    <form action="">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
                {{-- Nama --}}
                <div class="form-group row">
                    <label for="nrp" class="col-sm-2 control-label">NRP</label>
                    <div class="col-sm-8">
                        : {{ $m->NRP }}
                    </div>
                </div>
                {{-- Jabatan --}}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        : {{ $m->Nama }}
                    </div>
                </div>
                {{-- Umur --}}
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                    <div class="col-sm-8">
                        : {{ $m->Jurusan }}
                    </div>
                </div>
                {{-- Alamat --}}
                <div class="form-group row">
                    <label for="ipk" class="col-sm-2 control-label">IPK</label>
                    <div class="col-sm-8">
                        : {{ $m->IPK }}
                    </div>
                </div>

                <div class="col-sm-3 align-items-center mx-auto">
                    <a href="/mahasiswa" class="btn btn-primary col-sm-9">Kembali</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    @endsection
