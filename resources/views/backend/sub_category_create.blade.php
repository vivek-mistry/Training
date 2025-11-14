@extends('backend.layout.master_layout')

@section('main_content')
    <h1>SubCategory Create</h1>
        <a href="{{ route('sub_category_list') }}">
            <- BACK
        </a>
        <form action="{{ route('sub_category_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.sub_category_form_inputs')
        </form>
@endsection