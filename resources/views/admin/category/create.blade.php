@extends('layouts.main')

@section('content')

<div class="container mb-3">

    <h1>Создать категорию</h1>

    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="SEO-title" class="form-label">SEO title</label>
            <input type="text" name="SEO_title" class="form-control" id="SEO-title">
        </div>

        <div class="mb-3">
            <label for="SEO-descriptin" class="form-label">SEO descriptin</label>
            <input type="text" name="SEO_description" class="form-control" id="SEO-description">
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" name="slug" class="form-control" id="slug">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="short_content" class="form-label">Анонс</label><br>
            <textarea name="short_content" id="short_content" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Контент</label><br>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">изображение</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>

        <div class="mb-3">
            <button type="submit">Создать</button>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </form>


</div>

@endsection