@extends('app')

@section('title') Semua Data @endsection

@section('content')

    <h1>Data Sekolah</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Logo</th>
                <th colspan=2>Report</th>
                <th colspan=2>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sekolah as $key)
            <tr>
                <td>{{$key->nama}}</td>
                <td>{{$key->alamat}}</td>
                <td>{{$key->logo}}</td>
                <td><a target="_blank" href="{{url('pdf/'.$key->id)}}">PDF</a></td>
                <td><a href="{{url('download/'.$key->id)}}">Download</a></td>
                <td><a href="{{url('edit/'.$key->id)}}">Ubah</a></td>
                <td><a onclick="return confirm('Yakin hapus data {{$key->nama}}?')" href="{{url('delete/'.$key->id)}}">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection