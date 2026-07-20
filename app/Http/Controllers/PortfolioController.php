<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; // <-- TAMBAHAN: Untuk menghapus file gambar fisik

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

    // 3. CREATE: Menyimpan Data + Gambar + Validasi Input
    public function store(Request $request)
    {
        // BUKTI UAS: Validasi Input (Sekarang mencakup gambar dan tech_stack)
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'tech_stack' => 'nullable|string|max:255',
        ]);

        // Logika untuk menangkap dan menyimpan file gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Gambar akan disimpan di storage/app/public/portfolios
            $imagePath = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title . '-' . time()),
            'description' => $request->description,
            'image' => $imagePath, // <-- Simpan path gambar ke database
            'tech_stack' => $request->tech_stack,
            'link' => $request->link,
            'is_published' => true
        ]);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio dan Gambar berhasil ditambahkan!');
    }

    // 4. Tampilan Form EDIT
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    // 5. UPDATE: Mengubah Data + Gambar
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tech_stack' => 'nullable|string|max:255',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'tech_stack' => $request->tech_stack,
            'link' => $request->link,
        ];

        // Jika user mengupload gambar baru saat edit
        if ($request->hasFile('image')) {
            // Hapus gambar fisik yang lama terlebih dahulu agar tidak menuhin server
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }
            // Simpan gambar yang baru
            $data['image'] = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil diupdate!');
    }

    // 6. DELETE: Menghapus Data
    public function destroy(Portfolio $portfolio)
    {
        // Hapus juga file gambar fisiknya dari storage jika ada
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }

        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil dihapus!');
    }
}
