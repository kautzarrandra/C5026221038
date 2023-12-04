@extends('master2')

    @section('konten')
	<br>
	<h3>Data Pegawai</h3>

	<br/>

    @foreach($pegawai as $p)
    <form action="">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
                {{-- Nama --}}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        {{ $p->pegawai_nama }}
                    </div>
                </div>
                {{-- Jabatan --}}
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-8">
                        {{ $p->pegawai_jabatan }}
                    </div>
                </div>
                {{-- Umur --}}
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-8">
                        {{ $p->pegawai_umur }}
                    </div>
                </div>
                {{-- Alamat --}}
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8">
                        {{ $p->pegawai_alamat }}
                    </div>
                </div>

                <div class="col-sm-2 align-items-center mx-auto">
                    <a href="/pegawai" class="btn btn-primary col-sm-8">OK</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    @endsection
