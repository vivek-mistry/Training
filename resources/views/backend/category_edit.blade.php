<html>
    <head>
        <title>Category Edit</title>
    </head>
    <body>
        <h1>Category Edit</h1>
        <a href="{{ route('category_list') }}">
            <- BACK
        </a>
        
        <form action="{{ route('category_update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" required value="{{ $category->name }}">
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>
        </form>
        
    </body>
</html> 