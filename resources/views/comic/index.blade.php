@extends('layout.app')

@section('page.title')
    Comics admin page
@endsection

@section('page.main')
    <div class="container">
        {{-- Navigation button --}}
        <div class="row justify-content-end py-1">
            <div class="col-auto">
                <a href="{{ route('comics.create') }}" class="btn btn-light">Add new comic</a>
            </div>
        </div>
        {{-- /Navigation button --}}
        {{-- Show comics list --}}
        <div class="row py-4">
            <div class="col">
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
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td><img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-light">Details</a></td>
                            <td>
                                {{-- Modal confim --}}
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $comic->id }}">
                                    Delete
                                </button>
                                {{-- /Modal confim --}}
                                {{-- Modal content --}}
                                <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Be careful, this operation is irreversible!
                                                Do you really want to delete all <strong>{{ $comic->title }}</strong> content?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- /Modal content --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- /Show comics list --}}
    </div>
@endsection
