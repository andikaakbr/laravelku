@extends('master')

@section('konten')

    <h1>Halaman Utama</h1>

    <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Telah Berhasil Login <b>{{Auth::user()->role}}</b>.</h4>

@endsection