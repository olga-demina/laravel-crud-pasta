@extends('layouts.app')

@section('main_content')
    <h1>Lista delle paste</h1>
    <ul>
        @foreach ($pasta_list as $pasta)
            <li>
                <h3>
                    <a href="{{ route('pasta.show', ['pastum' => $pasta->id]) }}">
                        {{ $pasta->title }}
                    </a>
                </h3>
                <p>{{ $pasta->type }}</p>
            </li>
        @endforeach
    </ul>
@endsection
