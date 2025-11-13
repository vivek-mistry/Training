<html>
    <head>
        <title>Product List</title>
    </head>
    <body>
        <h1>Product List</h1>
        <a href="{{ route('product_create') }}">Create Product</a>
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
                    <th>Category</th>
                    <th>SubCategory</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($products->count() === 0)
                    <tr >
                        <td colspan="7">NO RECORD FOUND.</td>
                    </tr>
                @endif
                @foreach($products as $product)
                <tr>
                    <td>
                        {{ $product->id }}
                    </td>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                         {{ $product->category->name }}
                    </td>
                    <td>
                        {{ $product->subCategory->name }}
                    </td>
                    <td>
                        <img src="{{ asset($product->product_image) }}" height="40" />
                    </td>
                    <td>
                        {{ $product->status == true ? 'Active' : 'InActive' }}
                    </td>

                    <td>
                        {{ $product->created_at }}
                    </td>
                    <td>
                        {{ $product->updated_at }}
                    </td>
                    <td>
                        <a href="#">
                            DELETE
                        </a> <br/>

                        <a href="{{ route('product_edit', ['product' => $product->id]) }}">
                            EDIT
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html> 