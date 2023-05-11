@extends('layout.app')

@section('page.title')
    Comic details
@endsection

@section('page.main')
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>{{ $comic->title }}</h1>
            </div>
            <div class="col-3">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4 pb-3">
                        <strong>Series:</strong> {{ $comic->series }}
                    </div>
                    <div class="col-4 pb-3">
                        <strong>Type:</strong> {{ $comic->type }}
                    </div>
                    <div class="col-4 pb-3">
                        <strong>Sale date:</strong> {{ $comic->sale_date }}
                    </div>
                    <div class="col-12 pb-3">
                        <strong>Price:</strong> {{ $comic->price }}
                    </div>
                    <div class="col-12 py-4 border-top border-bottom">
                        {{ $comic->description }}
                    </div>
                    <div class="col-1 py-3">
                        Artist:
                    </div>
                    <div class="col-11 py-3">
                        {{ $comic->artists }}
                    </div>
                    <div class="col-1 pb-3">
                        Writers:
                    </div>
                    <div class="col-11 pb-3">
                        {{ $comic->writers }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-1 ms-auto">
                <a href="{{ route('comics.index') }}" class="btn btn-light">Back</a>
            </div>
        </div>
    </div>

@endsection