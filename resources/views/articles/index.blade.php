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
            </tr>
        @endforeach
    </table>
</x-layout>

