@extends('layout.app')

@section('page.title')
    Add new comic
@endsection

@section('page.main')
<div class="container">
    <div class="row">
        <div class="col border p-4 rounded">
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" min="1" max="100" step="0.01">
                </div>
                <select class="form-select" name="type" id="type">
                    <option selected>Select type</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                  </select>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Url cover image</label>
                    <input type="url" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists" name="artists">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers" name="writers">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary col-auto mx-2">Submit</button>
                    <button type="reset" class="btn btn-info col-auto mx-1">Reset</button>
                    <div class="col-auto ms-auto">
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection