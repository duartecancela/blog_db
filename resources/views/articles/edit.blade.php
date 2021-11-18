<!--Resolução Ficha 4-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Edit article in blog</title>
</head>
<body>
<h1>Edit an Article</h1>
<form method="post" action="update">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}"><p>
        <label for="description">Text Description:</label><br>
        <input type="text" id="text" name="text" value="{{ old('text', $article->text) }}"><p>
        <label for="picture">Picture URL:</label><br>
        <input type="text" id="picture" name="picture" value="{{ old('picture', $article->picture) }}"><p>

        <input type="submit" value="Submit">
</form>

</div>
</div>
</div>
</body>
</html>
