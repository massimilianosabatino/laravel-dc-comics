@extends('layout.app')

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
                    <div class="col-12 pb-5">
                        {{ $comic->description }}
                    </div>
                    <div class="col-1 pb-3">
                        Artist:
                    </div>
                    <div class="col-11 pb-3">
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
    </div>

@endsection