@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estudiantes Grupos</h1>
    <a href="{{ route('estudiantes_grupos.create') }}" class="btn btn-primary mb-3">Crear Nuevo</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantesGrupos as $estudianteGrupo)
            <tr>
                <td>{{ $estudianteGrupo->id }}</td>
                <td>{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}</td>
                <td>{{ $estudianteGrupo->grupo->nombre }}</td>
                <td>
                    <a href="{{ route('estudiantes_grupos.show', $estudianteGrupo->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('estudiantes_grupos.edit', $estudianteGrupo->id) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('estudiantes_grupos.delete', $estudianteGrupo->id) }}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $estudiantesGrupos->links() }}
</div>
@endsection
