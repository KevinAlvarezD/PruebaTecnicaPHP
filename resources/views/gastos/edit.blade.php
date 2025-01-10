<!-- resources/views/gastos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Gasto</h1>

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

        <!-- Formulario de edición de gasto -->
        <form action="{{ route('gastos.update', $gasto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $gasto->descripcion) }}" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" name="monto" id="monto" class="form-control" value="{{ old('monto', $gasto->monto) }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria', $gasto->categoria) }}" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', $gasto->fecha->format('Y-m-d')) }}" required>
            </div>
            <button type="submit" class="btn btn-success mt-4">Actualizar Gasto</button>
        </form>
    </div>
@endsection
