@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1> Modifica Pasta </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pasta.update', ['pastum' => $pasta_to_update->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{ old('title') ? old('title') : $pasta_to_update->title }}">
            </div>

            <div class="form-group mb-3">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" name="type" id="type"
                    value="{{ old('type') ? old('type') : $pasta_to_update->type }}">
            </div>

            <div class="form-group mb-3">
                <label for="image_src">Immagine</label>
                <input type="text" class="form-control" name="image_src" id="image_src"
                    value="{{ old('image_src') ? old('image_src') : $pasta_to_update->image_src }}">
            </div>

            <div class="form-group mb-3">
                <label for="cook_time">Tempo di cottura</label>
                <input type="text" class="form-control" name="cook_time" id="cook_time"
                    value="{{ old('cook_time') ? old('cook_time') : $pasta_to_update->cook_time }}">
            </div>

            <div class="form-group mb-3">
                <label for="weight">Peso</label>
                <input type="text" class="form-control" name="weight" id="weight"
                    value="{{ old('weight') ? old('weight') : $pasta_to_update->weight }}">
            </div>

            <div class="form-group mb-3">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" name="description" id="description"
                    value="{{ old('description') ? old('description') : $pasta_to_update->description }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
