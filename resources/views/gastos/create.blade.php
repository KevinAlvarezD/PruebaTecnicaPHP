<!-- resources/views/gastos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Nuevo Gasto</h1>
        
        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de creación de gasto -->
      <form action="{{ route('gastos.store') }}" method="POST">
    @csrf
    <!-- Campo oculto para el user_id -->
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <!-- Otros campos del formulario -->
    <div class="mb-4">
        <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    
    <div class="mb-4">
        <label for="monto" class="block text-sm font-medium text-gray-700">Monto</label>
        <input type="number" name="monto" id="monto" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
        <input type="text" name="categoria" id="categoria" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
        <input type="date" name="fecha" id="fecha" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Registrar Gasto</button>
</form>

    </div>
@endsection
