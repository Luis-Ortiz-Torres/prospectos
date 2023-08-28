<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use App\Models\Origenprospecto;
use App\Models\Prospecto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProspectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $prospectos = Prospecto::latest('created_at')->paginate(5);

        return view('prospectos.index', ['prospectos' => $prospectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $convenios = Convenio::all();
        $origenprospectos = Origenprospecto::all();
        return view('prospectos.create', ['convenios' => $convenios, 'origenprospectos' => $origenprospectos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'tipoIdentificacion' => 'required|string|max:45',
            'numeroIdentificacion' => 'required|numeric',
            'primerNombre' => 'required|string|max:45',
            'segundoNombre' => 'required|string|max:45',
            'primerApellido' => 'required|string|max:45',
            'segundoApellido' => 'required|string|max:45',
            'direccion' => 'required|string|max:45',
            'barrio' => 'required|string|max:45',
            'municipio' => 'required|string|max:45',
            'celular' => 'required|numeric',
            'telefono' => 'required|numeric',
            'correo' => 'required|string|max:45',
            'fechaIngreso' => 'required|date',
            'fechaPrimerContacto' => 'required|date',
            'estado' => 'required|string|max:20',
            'enteroBeneficios' => 'required|string|max:70',
            'nombreReferido' => 'nullable|string|max:45',
            'apellidoReferido' => 'nullable|string|max:45',
            'telefonoReferido' => 'nullable|string|max:45',
            'convenio_id' => 'nullable|numeric',
            'origenprospecto_id' => 'required|numeric', 
        ]);


        $prospecto = Prospecto::create($validated);

        return redirect(route('prospectos.index'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}