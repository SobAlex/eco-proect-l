@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-7">
            <h1>Редактировать услугу</h1>

            <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="SEO-title" class="form-label">SEO-title</label>
                    <input type="text" name="SEO_title" class="form-control" id="SEO-title" value="{{ $post->SEO_title }}">
                </div>

                <div class="mb-3">
                    <label for="SEO-descriptin" class="form-label">SEO-descriptin</label>
                    <input type="text" name="SEO_description" class="form-control" id="SEO-descriptin" value="{{ $post->SEO_description }}">
                </div>

                <div class=" mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
                </div>

                <div class=" mb-3">
                    <label for="short_content" class="form-label">Анонс</label><br>
                    <textarea name="short_content" id="short_content" cols="100" rows="10">{{ $post->short_content }}</textarea>
                </div>

                <div class=" mb-3">
                    <label for="content" class="form-label">Контент</label><br>
                    <textarea name="content" id="content" cols="100" rows="10">{{ $post->content }}</textarea>
                </div>

                <div class=" mb-3">
                    <label for="image" class="form-label">Изображение</label>
                    <input type="file" name="image" class="form-control" id="image" value="{{ $post->image }}">
                    <br>
                    <img src="{{asset($post->image)}}" alt="{{ $post->image }}" width="100">
                </div>

                <div class="form-group">
                    <span>Выберите категорию</span>
                    <select class="form-control select2 mt-2" name="category_id" style="width: 100%;">
                        <option selected="selected" disabled>Выберите категорию</option>
                        @foreach($categories as $category)
                        <option {{ $category->id === $post->category->id ? ' selected': '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <button class="btn btn-success" type="submit">Обновить</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection