<x-layout>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text Description</th>
            <th>Picture URL</th>
        </tr>
        @foreach($articles as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->text }}</td>
                <td>{{ $value->picture }}</td>
                <td><a href="/articles/{{$value->id}}/edit">Alterar</a></td>
                <td><a href="/">Remover</a></td>
            </tr>
        @endforeach
    </table>
</x-layout>


