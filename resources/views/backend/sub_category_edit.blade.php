<html>
    <head>
        <title>SubCategory Edit</title>
    </head>
    <body>
        <h1>SubCategory Edit</h1>
        <a href="{{ route('sub_category_list') }}">
            <- BACK
        </a>
        <form action="{{ route('sub_category_update', $sub_category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.sub_category_form_inputs')
        </form>
        
    </body>
</html> 