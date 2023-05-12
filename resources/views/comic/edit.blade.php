@extends('layout.app')

@section('page.title')
    Edit comic
@endsection

@section('page.main')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>   
@endif
<div class="container">
    <div class="row">
        <div class="col border p-4 rounded">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" min="1" max="100" step="0.01" value="{{ old('price', $comic->price) }}">
                </div>
                <select class="form-select" name="type" id="type">
                    <option {{ $comic->type === '' ? 'selected' : '' }}>Select type</option>
                    <option value="comic book" {{ old('type', $comic->type) === 'comic book' ? 'selected' : '' }}>Comic book</option>
                    <option value="graphic novel" {{ old('type', $comic->type) === 'graphic novel' ? 'selected' : '' }}>Graphic novel</option>
                  </select>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series)}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Url cover image</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $comic->description) }}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists', $comic->artists) }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers" name="writers"  value="{{ old('writers', $comic->writers) }}">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary col-auto mx-2">Submit</button>
                    <button type="reset" class="btn btn-info col-auto mx-1">Reset</button>
                    <div class="col-auto ms-auto">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection