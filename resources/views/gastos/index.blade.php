<!-- resources/views/gastos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Lista de Gastos</h1>
        
        <!-- Mostrar mensaje de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        
        <!-- Tabla con los gastos -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Monto</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gastos as $gasto)
                    <tr>
                        <td>{{ $gasto->descripcion }}</td>
                        <td>{{ $gasto->monto }}</td>
                        <td>{{ $gasto->categoria }}</td>
                        <td>{{ $gasto->fecha->format('d/m/Y') }}</td>
                        <td>
                            <!-- Botones para editar y eliminar -->
                            <a href="{{ route('gastos.edit', $gasto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('gastos.destroy', $gasto->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este gasto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Enlace para agregar un nuevo gasto -->
        <a href="{{ route('gastos.create') }}" class="btn btn-primary mt-4">Agregar Nuevo Gasto</a>
    </div>
@endsection
