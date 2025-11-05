<html>
    <head>
        <title>Category Create</title>
    </head>
    <body>
        <h1>Category Create</h1>
        <a href="{{ route('category_list') }}">
            <- BACK
        </a>
        <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" required>
            </div>

            <div>
                <button type="submit">SAVE</button>
            </div>
        </form>
        
    </body>
</html> 