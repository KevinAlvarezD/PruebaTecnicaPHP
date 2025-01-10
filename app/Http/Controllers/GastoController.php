<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    public function index()
    {

        $gastos = Gasto::where('user_id', request()->user_id)->orderBy('fecha', 'desc')->get();
        return view('gastos.index', compact('gastos'));
    }

    public function create()
    {
        return view('gastos.create');
    }

    public function store(Request $request)
    {
        // Validaciones
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'monto' => 'required|numeric|min:0.01',
            'categoria' => 'required|string|max:255',
            'fecha' => 'required|date',
            'user_id' => 'required|exists:users,id',  // Aseguramos que user_id esté presente y sea válido
        ]);

        // Guardar el gasto
        Gasto::create([
            'descripcion' => $request->descripcion,
            'monto' => $request->monto,
            'categoria' => $request->categoria,
            'fecha' => $request->fecha,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('gastos.index')->with('success', 'Gasto registrado exitosamente');
    }

    public function edit(Gasto $gasto)
    {
        // Verificar que el gasto pertenezca al usuario autenticado o pasarlo como parámetro
        // if ($gasto->user_id !== auth()->id()) {
        if ($gasto->user_id !== request()->user_id) {
            return redirect()->route('gastos.index')->with('error', 'No tienes permiso para editar este gasto');
        }

        return view('gastos.edit', compact('gasto'));
    }

    public function update(Request $request, Gasto $gasto)
    {
        // Verificar que el gasto pertenezca al usuario autenticado o pasarlo como parámetro
        if ($gasto->user_id !== request()->user_id) {
            return redirect()->route('gastos.index')->with('error', 'No tienes permiso para actualizar este gasto');
        }

        // Validaciones
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'monto' => 'required|numeric|min:0.01',
            'categoria' => 'required|string|max:255',
            'fecha' => 'required|date',
        ]);

        // Actualizar el gasto
        $gasto->update($request->all());

        return redirect()->route('gastos.index')->with('success', 'Gasto actualizado exitosamente');
    }

    public function destroy(Gasto $gasto)
    {
        // Verificar que el gasto pertenezca al usuario autenticado o pasarlo como parámetro
        if ($gasto->user_id !== request()->user_id) {
            return redirect()->route('gastos.index')->with('error', 'No tienes permiso para eliminar este gasto');
        }

        // Eliminar el gasto
        $gasto->delete();

        return redirect()->route('gastos.index')->with('success', 'Gasto eliminado exitosamente');
    }
}


