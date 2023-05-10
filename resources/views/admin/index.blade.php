@extends('layout.app')

@section('page.main')
    
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}</li>
        @endforeach
    </ul>
    
@endsection