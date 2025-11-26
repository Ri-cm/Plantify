<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = session('user_id');

        // Total tanaman user
        $totalTanaman = Plant::where('user_id', $user_id)->count();

        // Total kategori yang digunakan user (distinct)
        $totalKategori = Plant::where('user_id', $user_id)
                              ->distinct('category_id')
                              ->count('category_id');

        // Total stok user
        $totalStok = Plant::where('user_id', $user_id)->sum('stock');

        // Chart kategori nama yang dipakai user
        $kategori = Category::whereIn('id', 
                        Plant::where('user_id', $user_id)->pluck('category_id')
                    )->pluck('name');

        // Chart jumlah tanaman per kategori user
        $jumlah = Plant::selectRaw('category_id, COUNT(*) as total')
                        ->where('user_id', $user_id)
                        ->groupBy('category_id')
                        ->pluck('total');

        // Chart stok tanaman per kategori user
        $stokKategori = Plant::selectRaw('category_id, SUM(stock) as total_stok')
                        ->where('user_id', $user_id)
                        ->groupBy('category_id')
                        ->pluck('total_stok');

        return view('dashboard.index', compact(
            'totalTanaman',
            'totalKategori',
            'totalStok',
            'kategori',
            'jumlah',
            'stokKategori'
        ));
    }
}
