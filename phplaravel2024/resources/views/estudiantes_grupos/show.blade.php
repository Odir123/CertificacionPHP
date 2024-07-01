@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Estudiante Grupo</h1>
    <div class="card">
        <div class="card-header">
            Detalles
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $estudianteGrupo->id }}</p>
            <p><strong>Estudiante:</strong> {{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}</p>
            <p><strong>Grupo:</strong> {{ $estudianteGrupo->grupo->nombre }}</p>
            <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
