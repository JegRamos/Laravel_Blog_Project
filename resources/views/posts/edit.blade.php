@extends('layout.app')

@section('title')
    Edit | {{ $post->title }}
@endsection

@section('content')
    <form action="{{ route('posts.update', ['post' => $post->id ]) }}" method="POST" class="mt-3">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row d-flex align-items-center">
                <div class="col-sm-3 d-flex justify-content-start text-primary" id="post-label-title-edit">
                    <label for="title">
                        Title:
                    </label>
                </div>
                <div class="col-sm-9">
                    <input type="text"
                        class="form-control {{ $errors->has('title') ? 'is-invalid border border-danger' : '' }}"
                        name="title"
                        id="post-title-id"
                        value="{{ $post->title }}"
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
                <div class="col-sm-3 d-flex justify-content-start text-primary" id="post-label-body-edit">
                    <label for="body">
                        Post Content:
                    </label>
                </div>
                <div class="col-sm-9">
                    <textarea
                        name="body"
                        id="article-body-ckeditor"
                        cols="4" rows="4"
                        class="form-control {{ $errors->has('body') ? ' is-invalid border border-danger' : '' }}"
                        required
                        maxlength="200000">{{ $post->body }}</textarea>
                    @if ($errors->has('body'))
                        <small class="text-danger">{{ $errors->first('body') }}</small>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 ml-auto text-right">
                <a href="javascript:history.back()" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
@endsection
