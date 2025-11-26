<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PlantsExport;
use Illuminate\Support\Facades\Session;

class PlantController extends Controller
{
    public function index(Request $request)
    {
        $userId = Session::get('user_id');
        $search = $request->search;
        $category_id = $request->category_id;

        // Hanya tampilkan tanaman milik user
        $plants = Plant::with('category')->where('user_id', $userId);

        // Search nama tanaman
        if ($search) {
            $plants->where('name', 'ILIKE', '%' . $search . '%');
        }

        // Filter kategori
        if ($category_id) {
            $plants->where('category_id', $category_id);
        }

        // Paginate 10 per halaman
        $data = $plants->paginate(10)->withQueryString();

        // Kategori hanya milik user login
        $categories = Category::where('user_id', $userId)->get();

        return view('plants.index', compact('data', 'categories', 'search', 'category_id'));
    }

    public function create()
    {
        $userId = Session::get('user_id');

        // Tampilkan hanya kategori milik user
        $categories = Category::where('user_id', $userId)->get();

        return view('plants.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable'
        ]);

        Plant::create([
            'user_id' => Session::get('user_id'),
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return redirect()->route('plants.index')->with('success', 'Tanaman berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $userId = Session::get('user_id');

        // Pastikan tanaman milik user
        $plant = Plant::where('user_id', $userId)->findOrFail($id);

        // Kategori user
        $categories = Category::where('user_id', $userId)->get();

        return view('plants.edit', compact('plant', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $userId = Session::get('user_id');

        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $plant = Plant::where('user_id', $userId)->findOrFail($id);

        $plant->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return redirect()->route('plants.index')->with('success', 'Tanaman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $userId = Session::get('user_id');

        $plant = Plant::where('user_id', $userId)->findOrFail($id);

        $plant->delete();

        return redirect()->route('plants.index')->with('success', 'Tanaman berhasil dihapus!');
    }

    // =============================
    // EXPORT PDF
    // =============================
    public function exportPdf()
    {
        $userId = Session::get('user_id');

        $plants = Plant::with('category')
            ->where('user_id', $userId)
            ->get();

        $pdf = Pdf::loadView('plants.export_pdf', compact('plants'))
                  ->setPaper('a4', 'portrait');

        return $pdf->download('data_tanaman_plantify.pdf');
    }

    // =============================
    // EXPORT EXCEL
    // =============================
    public function exportExcel()
    {
        return Excel::download(new PlantsExport(Session::get('user_id')), 'data_tanaman_plantify.xlsx');
    }
}

