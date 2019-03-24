@extends('layout.app')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-3 text-center" id="title-page">A Stupid Laravel <strong>CRUD</strong> App</h1>
        <p class="lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consequuntur facilis illo quis? Veritatis quidem assumenda expedita qui harum
            quasi nostrum ipsam, consequuntur illo illum, in alias dolorem modi temporibus
            accusantium.
        </p>
        <div class="text-center">
            <a href="{{ route('posts.index') }}" class="btn btn-primary text-center mt-3">View Posts</a>
        </div>
    </div>
@endsection
