@extends('layouts.app')

@section('content')
    <h1>Lista de superhéroes</h1>

    <a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-2">Crear superhéroe</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre real</th>
                <th>Nombre de héroe</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $superhero)
                <tr>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->hero_name }}</td>
                    <td>
                        <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
