@extends('layouts.main')

@section('content')

<div class="container mb-3">

    <h1>Редактировать категорию</h1>

    <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="SEO-title" class="form-label">SEO title</label>
            <input type="text" name="SEO_title" class="form-control" id="SEO-title" value="{{ $category->SEO_title }}">
        </div>

        <div class="mb-3">
            <label for="SEO-description" class="form-label">SEO description</label>
            <input type="text" name="SEO_description" class="form-control" id="SEO-description" value="{{ $category->SEO_description }}">
        </div>

        <div class=" mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $category->title }}">
        </div>

        <div class=" mb-3">
            <label for="image" class="form-label">изображение</label>
            <input type="file" name="image" class="form-control" id="image" value="{{ $category->image }}">
            <br>
            <img src="{{asset($category->image)}}" alt="{{ $category->image }}" width="100">
        </div>

        <div class=" mb-3">
            <label for="short_content" class="form-label">Анонс</label><br>
            <textarea name="short_content" id="short_content" cols="30" rows="10">{{ $category->short_content }}</textarea>
        </div>

        <div class=" mb-3">
            <label for="content" class="form-label">Контент</label><br>
            <textarea name="content" id="content" cols="30" rows="10">{{ $category->content }}</textarea>
        </div>

        <div class="mb-3">
            <button type="submit">Обновить</button>
        </div>

    </form>


</div>

@endsection
