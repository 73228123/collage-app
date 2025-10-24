@extends('layouts.dashboard.main')
@section('main')
    <h1 class="mt-2">Listado de Actividades</h1>
    <a href="{{ route('dashboard.actividades.create') }}" class="btn btn-primary mb-3">Nueva Actividad</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
                <tr>
                    <td>{{ $actividad->id }}</td>
                    <td>{{ $actividad->fecha }}</td>
                    <td>{{ $actividad->descripcion }}</td>
                    <td>
                        <a href="{{ route('dashboard.actividades.edit', $actividad->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection