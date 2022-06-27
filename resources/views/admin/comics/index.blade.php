@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Comics</h2>
        <hr>
        {{-- Display redirection status --}}
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Slug</th>
                    <th>Cover Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->content }}</td>
                        <td><img width="120" src="{{ $comic->cover_image }}" alt="cover image"></td>
                        <td>{{ $comic->slug }}</td>
                        <td>
                            <div class="actions d-flex">
                                <a class="btn btn-primary btn-sm text-white me-1"
                                    href="{{ route('admin.comics.show', $comic->slug) }}">View</a>
                                <a class="btn btn-secondary btn-sm text-white me-1"
                                    href="{{ route('admin.comics.edit', $comic->slug) }}">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                                    data-bs-target="#delete-post-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="delete-post-{{ $comic->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modelTitle-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete {{ $comic->title }}?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this post? This action is irreversible.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('admin.comics.destroy', $comic->slug) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td scope="row">Nothing to show yet!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
