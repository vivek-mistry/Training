<html>
    <head>
        <title>SubCategory Create</title>
    </head>
    <body>
        <h1>SubCategory Create</h1>
        <a href="{{ route('sub_category_list') }}">
            <- BACK
        </a>
        <form action="{{ route('sub_category_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.sub_category_form_inputs')
        </form>
        
    </body>
</html> 