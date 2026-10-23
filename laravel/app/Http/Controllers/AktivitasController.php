<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AktivitasController extends Controller
{
    function index()
    {
    $aktivitas = Aktivitas::latest()->get();
    return view('aktivitas.index', compact('aktivitas'));
    }

    function create()
    {
        return view('aktivitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'status' => 'required|boolean',
        ]);

        Aktivitas::create($request->all());

        return redirect()->route('aktivitas.index')
                         ->with('success', 'Aktivitas created successfully.');
    }

    public function edit($id)
    {
        $aktivitas = Aktivitas::findOrFail($id);
        return view('aktivitas.edit', compact('aktivitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $aktivitas = Aktivitas::findOrFail($id);
        $aktivitas->update($request->all());

        return redirect()->route('aktivitas.index')
                         ->with('success', 'Aktivitas updated successfully.');
    }

    public function destroy($id)
    {
        $aktivitas = Aktivitas::findOrFail($id);
        $aktivitas->delete();

        return redirect()->route('aktivitas.index')
                         ->with('success', 'Aktivitas deleted successfully.');
    }

    public function show($id)
    {
        $aktivitas = Aktivitas::findOrFail($id);
        return view('aktivitas.show', compact('aktivitas'));
    }
}
