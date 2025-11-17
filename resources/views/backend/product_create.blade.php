@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Product Create</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div>
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Category</label>
                                    <select id="category_id" name="category_id" class="category_class form-select">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Sub Category</label>
                                    <select id="sub_category_id" name="sub_category_id" class="form-select">
                                        <option value="">Select Sub Category</option>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div>
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div>
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="product_image">Image</label>
                                    <input type="file" name="product_image" class="form-control" id="product_image">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="product_color" class="form-label">Color</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="product_color[]" value="Red">
                                    Red
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="product_color[]" value="Blue">
                                    Blue
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="product_color[]" value="Green">
                                    Green
                                </div>
                            </div>
                        </div>











                        <div>
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" value="1"> Status
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        var ROUTE_FETCH_SUBCATEGORY = "{{ route('sub_category_fetchDropDownSubCategory', ['category_id' => ':id']) }}"
        // alert(ROUTE_FETCH_SUBCATEGORY);
    </script>
    <script src="{{ asset('assets/js/subcategory.js') }}"></script>
@endsection
