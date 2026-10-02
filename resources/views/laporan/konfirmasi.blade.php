@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<x-alert>
    Laporan berhasil dikirim!
</x-alert>

<div class="card">
    <h2>Data Laporan</h2>

    <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
    <p><strong>Lokasi:</strong> {{ $data['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>
</div>

@endsection