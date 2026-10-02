<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function kirim(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('data'));
    }

    public function index()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Kecamatan Baleendah',
                'tinggi' => 20
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Kecamatan Dayeuhkolot',
                'tinggi' => 50
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Kecamatan Bojongsoang',
                'tinggi' => 90
            ],
        ];

        return view('laporan.index', compact('laporan'));
    }
}