<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="mb-3">

        <h2>{{ $category->title  }}</h2>
        <p>{{ $category->content }}</p>
        <img src="{{ $category->image }}" alt="{{ $category->image }}">

    </div>

</body>

</html>