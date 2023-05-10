@extends('layout.app')

@section('page.main')
    <div class="container">
        {{-- Show comics list --}}
        <table id="comics-list" class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    {{ $comic->id }}
                    <th scope="row">{{ $comic->id }}</th>
                    <td><img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td><a href="{{ route('admin.show', $comic->id) }}">dettaglio</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- /Show comics list --}}
    </div>
@endsection
