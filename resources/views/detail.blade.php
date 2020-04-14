@extends('master')

<!-- Isi Title -->
@section('title', 'Detail Mahasiswa')

<!-- Isi Bagian Judul Halaman -->
@section('judul_halaman', 'Detail Data Mahasiswa')

<!-- Isi Bagian Konten -->
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>

<h5 class="card-title">{{ $mahasiswa -> nama }}</h5>
<p class="card-text">
    <label for=""><b>NIM : </b></label>
    {{ $mahasiswa -> nim}}
</p>
<p class="card-text">
    <label for=""><b>E-Mail : </b></label>
    {{ $mahasiswa -> email}}
</p>
<p class="card-text">
    <label for=""><b>Jurusan : </b></label>
    {{ $mahasiswa -> jurusan}}
</p>
@endsection