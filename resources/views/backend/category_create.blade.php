@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Category Create</h1>
    <div class="card">

        <div class="card-body">
            <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('backend.category_form_inputs')
            </form>
        </div>
    </div>
@endsection
