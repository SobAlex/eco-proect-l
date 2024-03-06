@extends('layouts.main')

@section('content')

<div class="mb-3">

    <h2>{{ $post->title  }}</h2>
    <p>{{ $post->content }}</p>
    <img src="{{ $post->image }}" alt="{{ $post->image }}">

</div>

@endsection