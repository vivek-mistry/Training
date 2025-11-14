@extends('backend.layout.master_layout')

@section('main_content')
    <h1>Category Create</h1>
    <a href="{{ route('category_list') }}"><- BACK </a>
    <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('backend.category_form_inputs')
    </form>
@endsection
