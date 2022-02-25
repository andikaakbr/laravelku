<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <h1>Halaman Kontak</h1>

	<p>Ini Adalah Halaman Kontak PT XYZ</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>ptxyz@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>081234567890</td>
		</tr>
	</table>

@endsection