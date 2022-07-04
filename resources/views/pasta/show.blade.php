@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>{{ $pasta->title }}</h1>
        <p>{{ $pasta->type }}</p>
        <p>Peso: {{ $pasta->weight }}</p>
        <p>Tempo di cottura: {{ $pasta->cook_time }}</p>
        <p class="mb-4">{{ $pasta->description }}</p>
        <div>
            <a class="btn btn-primary" href="{{ route('pasta.edit', ['pastum' => $pasta->id]) }}">Modifica</a>

            <form action="{{ route('pasta.destroy', [ 'pastum' => $pasta->id ]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
        </div>

    </div>
@endsection
