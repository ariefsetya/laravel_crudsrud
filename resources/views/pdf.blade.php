<!DOCTYPE html>
<html>
<head>
	<title>{{$sekolah->nama}}</title>
</head>
<body>
	<h1>{{$sekolah->nama}}</h1>
	<img style="height:200px;" src="{{storage_path($sekolah->logo)}}">
	<p>{{$sekolah->alamat}}</p>
</body>
</html>