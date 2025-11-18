<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Models\Espacio;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::with('espacio')->orderBy('fecha','desc')->paginate(10);
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $espacios = Espacio::orderBy('nombre')->get();
        return view('reservas.create', compact('espacios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin'    => 'required|date_format:H:i',
            'motivo' => 'nullable|string|max:255',
        ]);

        Reserva::create($data);

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        $espacios = Espacio::orderBy('nombre')->get();
        return view('reservas.edit', compact('reserva', 'espacios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        $data = $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin'    => 'required|date_format:H:i',
            'motivo' => 'nullable|string|max:255',
        ]);

        $reserva->update($data);

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index')
            ->with('success', 'Reserva eliminada correctamente.');
    }
}
