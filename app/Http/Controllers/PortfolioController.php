<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // <-- INI SOLUSINYA, import class Str

class PortfolioController extends Controller
{
    // 1. READ: Menampilkan Data
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolio.index', compact('portfolios'));
    }

    // 2. Tampilan Form CREATE
    public function create()
    {
        return view('portfolio.create');
    }

    // 3. CREATE: Menyimpan Data + Validasi Input
    public function store(Request $request)
    {
        // BUKTI UAS: Validasi Input
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'link' => 'nullable|url'
        ]);

        Portfolio::create([
            'title' => $request->title,
            // Hapus backslash (\) dan langsung gunakan Str::slug
            'slug' => Str::slug($request->title . '-' . time()),
            'description' => $request->description,
            'link' => $request->link,
            'is_published' => true
        ]);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil ditambahkan!');
    }

    // 4. Tampilan Form EDIT
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    // 5. UPDATE: Mengubah Data + Validasi Input
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil diupdate!');
    }

    // 6. DELETE: Menghapus Data
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil dihapus!');
    }
}
