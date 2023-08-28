<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $convenios = Convenio::all();

        return view('convenios.index', ['convenios' => $convenios,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('convenios.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'codigo' => 'required|numeric',
            'nombre' => 'required|string|max:45',
            'descripcion' => 'required|string',
        ]);

        $convenio = Convenio::create($validated);

        return redirect(route('convenios.index'));
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
    public function edit(Convenio $convenio) : View
    {
        return view('convenios.edit', ['convenio' => $convenio,]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Convenio $convenio) : RedirectResponse
    {
        $validated = $request->validate([
            'codigo' => 'required|numeric',
            'nombre' => 'required|string|max:45',
            'descripcion' => 'required|string',
        ]);

        $convenio->update($validated);

        return redirect(route('convenios.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Convenio $convenio)  : RedirectResponse
    {
        $convenio->delete();
        return redirect(route('convenios.index'));
    }
}