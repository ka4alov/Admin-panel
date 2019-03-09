@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <input name="name"  value="name" type="text" class="form-control">
        <input name="brand"  value="brand" type="text" class="form-control">
        <input name="articul"  value="articul" type="text" class="form-control">
        <input name="description"  value="description" type="text" class="form-control">
        <input name="price"  value="price" type="text" class="form-control">
        <input name="category_id" value="category_id 1/0" id="category_id" type="text" class="form-control">
        <input name="publish"  value="publish 1/0" type="text" class="form-control">
        <input class="btn btn-primary" type="submit" value="Сохранить" />
    </form>
    @endsection