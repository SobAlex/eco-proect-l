@extends('layouts.main')

@section('content')

<div class="mb-3">

    <h2>{{ $category->title  }}</h2>
    <p>{{ $category->content }}</p>
    <img src="{{ $category->image }}" alt="{{ $category->image }}">

</div>
@endsection