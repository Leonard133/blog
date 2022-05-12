@extends('layout.app')

@section('content')
    <div class="tw-min-h-screen">
        <div class="row tw-my-10">
            <div class="col d-flex justify-content-between">
                <h1 class="tw-text-2xl">My Post</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">Create Post</a>
            </div>
        </div>
        <div class="row tw-my-10">
            <div class="tw-grid tw-grid-cols-4 tw-gap-10">
                @forelse($posts as $post)
                    <x-post :post="$post"></x-post>
                @empty
                    <div>No Post Found.</div>
                @endforelse
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
