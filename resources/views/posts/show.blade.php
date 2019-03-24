@extends('layout.app')

@section('title')
    Blog | {{ $post->title }}
@endsection

@section('content')
<div class="container col-12 col-md-10 mb-2" id="blogs-show">
    <div class="card" id="article-id">
        <div class="card-header bg-white">
            <div class="pt-3">
                <h3 class="card-title text-dark">{{ $post->title }}</h3>
                <small>
                    <strong>Written on: </strong>
                    {{ \Carbon\Carbon::parse($post->created_at)->format('M-d-Y') }}
                </small>
            </div>
        </div>
        <div class="card-body">
            <p>{!! $post->body !!}</p>
        </div>
        <br>
        <div class="d-flex align-items-center justify-content-end p-3">
            <div class="d-flex flex-wrap justify-content-end">
                <a href="javascript:history.back()" class="btn btn-sm btn-dark ml-2 mb-2">
                    <i class="fas fa-arrow-circle-left"></i> Go Back
                </a>
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-sm btn-primary ml-2 mb-2">
                    <i class="fas fa-edit"></i> Edit Post
                </a>
                <form action="{{ route('posts.delete', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-danger ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white" id="exampleModalLabel"><strong>Delete Post?</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="text-white">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete "{{ $post->title }}"?
                                    <p class="text-danger"><small><strong>This cannot be undone.</strong></small></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No..</button>
                                    <button type="submit" class="btn btn-danger">Yes, please!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
