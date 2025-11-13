<html>
    <head>
        <title>Product Edit</title>
    </head>
    <body>
        <h1>Product Edit</h1>
        <a href="{{ route('product_list') }}">
            <- BACK
        </a>
        <form action="{{ route('product_update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}">
            </div>

            <div>
                <label>Category </label>
                <select id="category_id" name="category_id" class="category_class">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Sub Category</label>
                <select id="sub_category_id" name="sub_category_id">
                    <option value="">Select Sub Category</option>
                    @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}" {{ $product->sub_category_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="product_image">Image</label>
                <input type="file" name="product_image" id="product_image">
            </div>

            <div>
                <label for="product_color">Color</label>
                <input type="checkbox" name="product_color[]" value="Red" {{ in_array('Red',$product_color) ? 'checked' : '' }}> Red
                <input type="checkbox" name="product_color[]" value="Blue" {{ in_array('Blue',$product_color) ? 'checked' : '' }}> Blue
                <input type="checkbox" name="product_color[]" value="Green" {{ in_array('Green',$product_color) ? 'checked' : '' }}> Green
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">
                    {{ $product->description }}
                </textarea>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" value="{{ $product->price }}">
            </div>
            <div>
                <label for="status">Status</label>
                <input type="checkbox" name="status" value="1" {{ $product->status == true ? 'checked' : '' }}> Status
            </div>
            <button type="submit">Submit</button>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            var ROUTE_FETCH_SUBCATEGORY = "{{ route('sub_category_fetchDropDownSubCategory', ['category_id' => ':id']) }}"
            // alert(ROUTE_FETCH_SUBCATEGORY);
            
        </script>
        <script src="{{ asset('assets/js/subcategory.js') }}"></script>
    </body>
</html> 