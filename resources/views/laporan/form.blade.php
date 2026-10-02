@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<div class="card">
    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('laporan.kirim') }}" method="POST">
        @csrf

        <label>Nama Pelapor</label>
        <input type="text" name="nama" required>

        <label>Lokasi Kejadian</label>
        <input type="text" name="lokasi" required>

        <label>Tinggi Genangan Air (cm)</label>
        <input type="number" name="tinggi" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

@endsection