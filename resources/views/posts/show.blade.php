@extends('layout.app')

@section('content')
    <div class="tw-min-h-screen">
        <div class="row tw-my-10">
            <div class="col d-flex justify-content-between">
                <h1 class="tw-text-2xl">Show Post</h1>
                <a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
        <div class="row tw-my-10">
            <div class="col">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" readonly class="form-control" value="{{ $post->title }}" id="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" readonly id="description">{{ $post->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="published_at" class="form-label">Published At</label>
                    <textarea class="form-control" readonly id="published_at">{{ $post->published_at }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
