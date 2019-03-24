@extends('layout.app')

@section('title')
    Services
@endsection

@section('content')
<div class="col-sm-6 m-auto">
    <h4>Services</h4>
    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item list-group-item-primary">{{ $service }}</li>
        @endforeach
    </ul>
</div>
@endsection
