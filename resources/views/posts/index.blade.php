@extends('layout.app')

@section('title')
    Blog Posts
@endsection

@section('content')
    @foreach ($posts as $post)
    <div class="col-xs-12 col-md-8 col-lg-6 m-auto" id="blogs-index">
        <div class="card border border-primary mb-2">
            <h4 class="card-header bg-primary text-white">
                {{ $post->title }}
            </h4>
            <div class="card-body" id="post-body-card">
                <p class="card-subtitle">
                    {!! str_limit(strip_tags($post->body, '<p>'), 150) !!}
                </p>
                <div>
                <p class="text-muted mt-2">
                <small>
                        <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                        class="text-muted">
                            <i class="fas fa-book-open"></i> Read More
                        </a>
                    </small>
                </p>
                </div>
                <small class="text-muted" id="post-date-id">
                    <strong>Created on: </strong>
                    {{ \Carbon\Carbon::parse($post->created_at)->format('M-d-Y') }}
                </small>
            </div>
        </div>
    </div>
   @endforeach
    <div class="col-sm-6 m-auto d-flex justify-content-center" id="paginator-d">
        {{ $posts->onEachSide(1)->links() }}
    </div>
    <div class="col-sm-6 m-auto d-flex justify-content-center" id="paginator-m">
        {{ $posts_m->links() }}
    </div>
    <div class="row">
        <div class="col-sm-3 col-2 ml-auto fixed-bottom">
            <small>
                <a href="{{ route('posts.create') }}"
                    class="btn btn-primary mb-5 mr-2"
                    id="add-post-btn-id" name="add-post-btn">
                    <i class="fas fa-plus-circle"></i> Add <span id="add-post-label-id">Post</span>
                </a>
            </small>
        </div>
    </div>
@endsection
