<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container mb-3">

        <h1>Post create</h1>

        <form action="{{ route('post.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="SEO-title" class="form-label">Title</label>
                <input type="text" name="SEO_title" class="form-control" id="SEO-title">
            </div>

            <div class="mb-3">
                <label for="SEO-descriptin" class="form-label">Descriptin</label>
                <input type="text" name="SEO_descriptin" class="form-control" id="SEO-descriptin">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">изображение</label>
                <input type="text" name="image" class="form-control" id="image">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Контент</label><br>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit">Создать</button>
            </div>

        </form>


    </div>

</body>

</html>
