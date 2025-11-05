<html>
    <head>
        <title>Category List</title>
    </head>
    <body>
        <h1>Category List</h1>
        <a href="{{ route('category_create') }}">Create Category</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{ $category->created_at }}
                    </td>
                    <td>
                        {{ $category->updated_at }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html> 