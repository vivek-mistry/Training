@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Category List</h1>


    @if (Session::has('success'))
        <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show">
            <div class="d-flex align-items-center">
                <div class="font-35 text-white"><span class="material-icons-outlined fs-2">check_circle</span>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Success Alerts</h6>
                    <div class="text-white">{{ Session::get('success') }}</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <a href="{{ route('category_create') }}" class="btn btn-grd btn-grd-info px-5">Create Category</a>
        </div>
        <div class="card-body">
            <table class="test table mb-0 table-hover">
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
                                <a class="btn btn-danger px-5"
                                    href="{{ route('category_delete', ['id' => $category->id]) }}">
                                    DELETE
                                </a>

                                <a class="btn btn-primary px-5"
                                    href="{{ route('category_edit', ['id' => $category->id]) }}">
                                    EDIT
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
