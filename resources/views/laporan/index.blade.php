@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')

<h2>Daftar Laporan Banjir</h2>

@foreach ($laporan as $item)

    @include('partials.laporan-card', ['item' => $item])

@endforeach

@endsection