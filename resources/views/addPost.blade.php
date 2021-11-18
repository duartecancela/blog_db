<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Add post in blog</title>
</head>
<body>
    <h1>Add a Post in My Blog</h1>
    <form method="post" action="http://localhost:8000/posts/store">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="comment">Comment:</label><br>
        <input type="text" id="comment" name="comment" value=""><br><br>
        <input type="submit" value="Submit">
    </form>

</div>
</div>
</div>
</body>
</html>
