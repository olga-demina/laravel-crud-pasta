@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>{{ $pasta->title }}</h1>
        <p>{{ $pasta->type }}</p>
        <p>Peso: {{ $pasta->weight }}</p>
        <p>Tempo di cottura: {{ $pasta->cook_time }}</p>
        <p>{{ $pasta->description }}</p>
    </div>
@endsection
