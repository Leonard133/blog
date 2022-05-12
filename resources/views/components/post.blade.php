@props(['post'])
<div class="card">
    <div class="card-header tw-flex tw-justify-between">
        <h5 class="card-title tw-uppercase tw-mb-0">{{ $post->title }}</h5>
        <span class="tw-text-sm">{{ $post->published_at->diffForHumans() }}</span>
    </div>
    <div class="card-body">
        <p class="card-text">{{ $post->description }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa-solid fa-file-pen"></i></a>
        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show"><i class="fa-solid fa-eye"></i></a>
        <form action="{{ route('posts.destroy', $post) }}" class="tw-inline" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</div>
