<x-layout>
    <h1>Create an Article</h1>
    <form method="post" action="http://localhost:8000/articles/store">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=""><p>
        <label for="description">Text Description:</label><br>
        <input type="text" id="text" name="text" value=""><p>
        <label for="picture">Picture URL:</label><br>
        <input type="text" id="picture" name="picture" value=""><p>

        <input type="submit" value="Submit">
    </form>
</x-layout>
