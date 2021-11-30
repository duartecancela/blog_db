<x-layout>
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
</x-layout>

