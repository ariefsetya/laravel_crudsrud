@extends('app')

@section('title') Semua Data @endsection

@section('content')

    <h1>Pencarian Data Sekolah '{{$key}}'</h1>
    @if(sizeof($sekolah)==0)
        <p>Oops, Data Sekolah tidak ditemukan</p>
    @endif
    @foreach($sekolah as $key)
      <div class="panel panel-default">
        <div class="panel-heading">{{$key->nama}}</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{url('images/'.$key->logo)}}" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                    <p>{{$key->alamat}}</p>
                </div>
            </div>
        </div>
      </div>
    @endforeach


@endsection