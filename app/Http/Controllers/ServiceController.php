<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'starting_price' => 'required|numeric'
        ]);

        Service::create($request->all());
        return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'starting_price' => 'required|numeric'
        ]);

        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Layanan berhasil diupdate!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus!');
    }
}
