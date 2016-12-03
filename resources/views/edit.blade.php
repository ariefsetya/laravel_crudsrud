@extends('app')

@section('title') Edit Data Sekolah @endsection

@section('content')

    <h1>Edit Data Sekolah</h1>
    <form method="POST" action="{{url('update')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$sekolah->id}}">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td><input value="{{$sekolah->nama}}" class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea rows="4" class="form-control" name="alamat">{{$sekolah->alamat}}</textarea></td>
            </tr>
            <tr>
                <td>Logo</td>
                <td>
                <img class="img-thumbnail" style="height: 200px" src="{{url('images/'.$sekolah->logo)}}">
                <hr>
                <input class="form-control" type="file" name="logo"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success" type="submit">Perbarui</button></td>
            </tr>
        </table>
    </form>

@endsection