<!--Resolução Ficha 4-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Articles Index</title>
</head>
<body>
<h1>My Articles Index</h1>
     <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text Description</th>
            <th>Picture URL</th>
        </tr>
<?php
    //print_r($articles);
    foreach ($articles as &$value) {
           echo '<tr>';
                echo '<td>'.$value->id.'</td>';
                echo '<td>'.$value->title.'</td>';
                echo '<td>'.$value->text.'</td>';
                echo '<td>'.$value->picture.'</td>';
           echo '</tr>';
    }
?>
        </table>
</body>
</html>
