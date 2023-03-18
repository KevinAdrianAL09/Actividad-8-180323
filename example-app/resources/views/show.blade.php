@extends('layouts.app')

@section('content')
    <h1>{{ $superhero->hero_name }}</h1>

    <div class="card mb-3">
        <img src="{{ $superhero->photo_url }}" class="card-img-top" alt="{{ $superhero->hero_name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $superhero->real_name }}</h5>
            <p class="card-text">{{ $superhero->additional_info }}</p>
            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
@endsection
