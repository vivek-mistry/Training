@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Category List</h1>
    <a href="{{ route('category_create') }}">Create Category</a>
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
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($categories->count() === 0)
                <tr>
                    <td colspan="4">NO RECORD FOUND.</td>
                </tr>
            @endif
            @foreach ($categories as $category)
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
                    <td>
                        <a href="{{ route('category_delete', ['id' => $category->id]) }}">
                            DELETE
                        </a> <br />

                        <a href="{{ route('category_edit', ['id' => $category->id]) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
