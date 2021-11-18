<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Show Post</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>My Created Post</h1>

<?php
    echo '<label>Title: </label>'.$post['title'].'<br>';
    echo '<label>Comment: </label>'.$post["comment"].'<br>';
?>

</body>
</html>
