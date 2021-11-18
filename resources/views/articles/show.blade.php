<!--Resolução Ficha 4-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Show Added Article</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>My Created Article</h1>
<?php
    //print_r($article);
    echo '<b>ID: </b>'.$article->id.'<br>';
    echo '<b>Title: </b>'.$article->title.'<br>';
    echo '<b>Description: </b>'.$article->text.'<br>';
    echo '<b>Picture URL: </b>'.$article->picture.'<br>';
?>
</body>
</html>
