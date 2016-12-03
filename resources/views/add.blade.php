@extends('app')

@section('title') Tambah Data Sekolah @endsection

@section('content')

    <h1>Tambah Data Sekolah</h1>
    <form method="POST" action="{{url('save')}}" enctype="multipart/form-data">
    {{csrf_field()}}
        <table class="table">
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea rows="4" class="form-control" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><input class="form-control" type="file" name="logo"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success" type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>

@endsection