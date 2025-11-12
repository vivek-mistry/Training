<html>
    <head>
        <title>Product Create</title>
    </head>
    <body>
        <h1>Product Create</h1>
        <a href="{{ route('product_list') }}">
            <- BACK
        </a>
        <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label>Category</label>
                <select id="category_id" name="category_id" class="category_class">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Sub Category</label>
                <select id="sub_category_id" name="sub_category_id">
                    <option value="">Select Sub Category</option>
                    
                </select>
            </div>
            
            <div>
                <label for="product_image">Image</label>
                <input type="file" name="product_image" id="product_image">
            </div>

            <div>
                <label for="product_color">Color</label>
                <input type="checkbox" name="product_color[]" value="Red"> Red
                <input type="checkbox" name="product_color[]" value="Blue"> Blue
                <input type="checkbox" name="product_color[]" value="Green"> Green
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" >
            </div>
            <div>
                <label for="status">Status</label>
                <input type="checkbox" name="status" value="1"> Status
            </div>
            <button type="submit">Submit</button>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            var ROUTE_FETCH_SUBCATEGORY = "{{ route('sub_category_fetchDropDownSubCategory', ['category_id' => ':id']) }}"
            // alert(ROUTE_FETCH_SUBCATEGORY);
            $("#category_id").on('change', function() {
                // Fetch on this change event of category_id
                var category_id = $(this).val();

                // Fetch through ID of input
                // var category_id = $("#category_id").val();

                // Fetch through class name
                // var cat_id = $(".category_class").val();
                $.ajax({
                    url: ROUTE_FETCH_SUBCATEGORY.replace(':id', category_id),
                    type: "GET",
                    success : function (response){
                        // console.log("success ", response.html);
                        $("#sub_category_id").html(response.html);
                    },
                    error : function (error){
                        console.log(error);
                    }
                });
            }); 
        </script>
    </body>
</html> 