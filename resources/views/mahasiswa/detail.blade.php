@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
    <p><strong>IPK:</strong> {{ number_format($mahasiswa['ipk'], 2) }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa['prodi'] }}</p>

    <p><a href="{{ route('mahasiswa.daftar') }}">← Kembali ke daftar</a></p>
@endsection