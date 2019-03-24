@extends('layout.app')

@section('title')
    Create Post
@endsection

@section('content')
    <form action="{{ route('posts.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="form-group">
            <div class="row d-flex align-items-center">
                <div class="col-sm-3 d-flex justify-content-start text-primary" id="post-label-title-create">
                    <label for="title">Title: </label>
                </div>
                <div class="col-sm-9">
                    <input type="text"
                        class="form-control {{ $errors->has('title') ? 'is-invalid border border-danger' : '' }}"
                        name="title"
                        id="post-title-id"
                        placeholder="// Enter Post Title"
                        required
                        maxlength="50"
                    >
                    @if ($errors->has('title'))
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row d-flex align-items-center mt-1">
                <div class="col-sm-3 d-flex justify-content-start text-primary" id="post-label-body-create">
                    <label for="body">
                        Post Content:
                    </label>
                </div>
                <div class="col-sm-9">
                    <textarea name="body"
                        id="article-body-ckeditor"
                        cols="4" rows="4"
                        placeholder="//Write Content"
                        class="form-control {{ $errors->has('body') ? ' is-invalid border border-danger' : '' }}"
                        required
                        maxlength="200000"></textarea>
                    @if ($errors->has('body'))
                        <small class="text-danger">{{ $errors->first('body') }}</small>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 ml-auto text-right">
                <a href="{{ route('posts.index') }}" class="btn btn-danger">Cancel</a>
                <button class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
@endsection
