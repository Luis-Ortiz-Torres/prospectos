<?php

namespace App\Http\Controllers;

use App\Models\Origenprospecto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrigenprospectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $origenprospectos = Origenprospecto::all();

        return view('origenprospectos.index', ['origenprospectos' => $origenprospectos,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('origenprospectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([            
            'nombre' => 'required|string|max:45',
        ]);

        $origenprospecto = Origenprospecto::create($validated);

        return redirect(route('origenprospectos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Origenprospecto $origenprospecto) : View
    {
        return view('origenprospectos.edit', ['origenprospecto' => $origenprospecto,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Origenprospecto $origenprospecto) : RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:45',
        ]);

        $origenprospecto->update($validated);

        return redirect(route('origenprospectos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Origenprospecto $origenprospecto)  : RedirectResponse
    {
        $origenprospecto->delete();
        return redirect(route('origenprospectos.index'));
    }
}