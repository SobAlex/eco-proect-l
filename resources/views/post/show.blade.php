<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="mb-3">

        <h2>{{ $post->title  }}</h2>
        <p>{{ $post->content }}</p>
        <img src="{{ $post->image }}" alt="{{ $post->image }}">

    </div>

</body>

</html>
