@extends('layout.app')

@section('content')
    <div class="tw-min-h-screen">
        <div class="row tw-my-10">
            <div class="col d-flex justify-content-between">
                <h1 class="tw-text-2xl">Edit Post</h1>
            </div>
        </div>
        <div class="row tw-my-10">
            <div class="col">
                <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post) }}" id="title">
                        @error('title')
                        <div id="titleFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ old('description', $post) }}</textarea>
                        @error('description')
                        <div id="descriptionFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary tw-bg-blue-500">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
