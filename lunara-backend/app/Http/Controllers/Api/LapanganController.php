<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lapangan;

class LapanganController extends Controller
{
    // Tampilkan semua lapangan
    public function index()
    {
        $lapangans = Lapangan::all();
        return response()->json([
            'status' => 'success',
            'data' => $lapangans
        ]);
    }

    // Tampilkan 1 lapangan saja secara spesifik
    public function show($id)
    {
        $lapangan = Lapangan::find($id);
        
        if(!$lapangan) {
            return response()->json(['message' => 'Lapangan tidak ditemukan'], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $lapangan
        ]);
    }
}