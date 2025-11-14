@extends('backend.layout.master_layout')

@section('main_content')
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
            
        </script>
        <script src="{{ asset('assets/js/subcategory.js') }}"></script>
@endsection