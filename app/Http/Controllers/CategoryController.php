<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $userId = Session::get('user_id');

        $data = Category::where('user_id', $userId)->get();

        return view('categories.index', compact('data'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Session::get('user_id'),
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $userId = Session::get('user_id');

        $category = Category::where('user_id', $userId)
                            ->where('id', $id)
                            ->firstOrFail();

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $userId = Session::get('user_id');

        $category = Category::where('user_id', $userId)
                            ->where('id', $id)
                            ->firstOrFail();

        $category->update($request->only('name', 'description'));

        return redirect()->route('categories.index')
            ->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $userId = Session::get('user_id');

        $category = Category::where('user_id', $userId)
                            ->where('id', $id)
                            ->firstOrFail();

        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
