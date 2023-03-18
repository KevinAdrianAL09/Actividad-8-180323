@extends('layouts.app')

@section('content')
    <h1>Editar superhéroe</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="real_name">Nombre real:</label>
            <input type="text" id="real_name" name="real_name" class="form-control" value="{{ $superhero->real_name }}" required>
        </div>

        <div class="form-group">
            <label for="hero_name">Nombre de héroe:</label>
            <input type="text" id="hero_name" name="hero_name" class="form-control" value="{{ $superhero->hero_name }}" required>
        </div>

        <div class="form-group">
            <label for="photo_url">URL de la foto:</label>
            <input type="url" id="photo_url" name="photo_url" class="form-control" value="{{ $superhero->photo_url }}" required>
        </div>

        <div class="form-group">
            <label for="additional_info">Información adicional:</label>
            <textarea id="additional_info" name="additional_info" class="form-control">{{ $superhero->additional_info }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
@endsection
