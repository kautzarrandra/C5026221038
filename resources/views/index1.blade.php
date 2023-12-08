@extends('master2')
@section('judulhalaman', 'Data Nilai')

@section('konten')
    <br>
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilai/add" class="btn btn-primary"> + Tambah Data</a>
    <br>
    <br>

    <table class="table table-stripped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilaikuliah as $nk)
        <tr>
            <td>{{ $nk->ID }}</td>
            <td>{{ $nk->NRP }}</td>
            <td>{{ $nk->NilaiAngka }}</td>
            <td>{{ $nk->SKS }}</td>
            <td>
                @if ($nk->NilaiAngka <= 40)
                D
                @elseif ($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                C
                @elseif ($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                B
                @elseif ($nk->NilaiAngka >= 81)
                A
                @endif
            </td>
            <td>
                {{$nk->NilaiAngka*$nk->SKS}}
            </td>
        </tr>
        @endforeach
    </table>

@endsection
