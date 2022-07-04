@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Crea una nuova pasta</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pasta.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
            </div>
            <div class="mb-3">
                <label for="image_src" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image_src" name="image_src" value={{ old('image_src') }}>
            </div>
            <div class="mb-3">
                <label for="cook_time" class="form-label">Tempo di cottura</label>
                <input type="text" class="form-control" id="cook_time" name="cook_time" value="{{ old('cook_time') }}">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Peso</label>
                <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
