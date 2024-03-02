<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="mb-3">

        @foreach ($categories as $category)

        <h2>{{ $category->title  }}</h2>
        <p>{{ $category->content }}</p>
        <img src="{{ $category->image }}" alt="{{ $category->image }}">
        <br>
        <a href="{{ route('category.show', $category->id) }}">Подробнее</a>
        <br>
        <a href="{{ route('category.create') }}">Создать</a>
        <br>
        <a href="{{ route('category.edit', $category->id) }}">Редактировать</a>

        <form action="{{ route('category.delete', $category->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">Удалить</button>

        </form>

        @endforeach

    </div>

</body>

</html>