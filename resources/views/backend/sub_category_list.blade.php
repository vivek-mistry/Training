<html>
    <head>
        <title>Subcategory List</title>
    </head>
    <body>
        <h1>Subcategory List</h1>
        <a href="{{ route('sub_category_create') }}">Create Subcategory</a>
        @if (Session::has('success'))
            <p>
                {{ Session::get('success') }}
            </p>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($subcategories->count() === 0)
                    <tr >
                        <td colspan="6">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($subcategories as $sub_category)
                <tr>
                    <td>
                        {{ $sub_category->id }}
                    </td>
                    <td>
                        {{ $sub_category->name }}
                    </td>
                    <td>
                        {{ $sub_category->category->name }}
                    </td>
                    <td>
                        {{ $sub_category->created_at }}
                    </td>
                    <td>
                        {{ $sub_category->updated_at }}
                    </td>
                    <td>
                        <a href="#">
                            DELETE
                        </a> <br/>

                        <a href="{{ route('sub_category_edit', $sub_category->id) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html> 