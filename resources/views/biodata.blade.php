<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PT XYZ</title>
</head>
<body>
<h1>PT XYZ</h1>
  <p>Nama : {{$nama}}</p>
  <p>Keahlian</p>
  <ul>
    @foreach($keahlian as $k)
    <li>{{$k}}</li>
    @endforeach
  </ul>
</body>
</html>