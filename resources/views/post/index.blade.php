<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="mb-3">

        @foreach ($posts as $post)

        <h2>{{ $post->title  }}</h2>
        <p>{{ $post->content }}</p>
        <img src="{{ $post->image }}" alt="{{ $post->image }}">
        <br>
        <a href="{{ route('post.show', $post->id) }}">Подробнее</a>
        <br>
        <a href="{{ route('post.create') }}">Создать</a>
        <br>
        <a href="{{ route('post.edit', $post->id) }}">Редактировать</a>

        <form action="{{ route('post.delete', $post->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">Удалить</button>

        </form>

        @endforeach

    </div>

</body>

</html>
