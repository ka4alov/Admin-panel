@extends('layouts.app')
@section('content')
    <div class="container pt-4">
    <form action="{{ route('products.index') }}">
        <main class="py-4">
            <input class="btn-sm btn-primary" type="submit" value="Назад" />
        </main>
    </form>
    <form method="POST" action="{{ route('products.update', ['id' => $products->id]) }}">
        <input name="imagePath" value="{{$products->imagePath}}" id="imagePath" type="text" class="form-control">
        <input name="name" value="{{$products->name}}" id="name" type="text" class="form-control">
        <input name="brand" value="{{$products->brand}}" id="brand" type="text" class="form-control">
        <input name="articul" value="{{$products->articul}}" id="articul" type="text" class="form-control">
        <input name="description" value="{{$products->description}}" id="description" type="text" class="form-control">
        <input name="price" value="{{$products->price}}" id="price" type="text" class="form-control">
        <input name="category_id" value="{{$products->category_id}}" id="category_id" type="number" class="form-control">
        <input name="publish" value="{{$products->publish}}" id="publish" type="text" class="form-control">

                    <input class="btn-sm btn-success" type="submit" value="Изменить" />
                    <input type="hidden" name="_method" value="PUT" />


        @csrf
    </form>
    </div>
    @endsection