<!DOCTYPE html>
<html>
<head>
  <title>PT XYZ</title>
</head>
<body>
   <h2>Form Pendaftaran</h2>
  <form action="pendaftaran/proses" method="post">
        {{csrf_field()}}
    Nama :
    <input type="text" name="nama">
    <br/>
    <br/>
    Jabatan :
    <input type="text" name="jabatan">
    <br/>
    <br/>
    Umur :
    <input type="text" name="umur">
    <br/>
    <br/>
    Alamat :
    <input type="text" name="alamat">
    <br/>
    <hr/>
    <input type="submit" value="Simpan">
  </form>
</body>
</html>