@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/side.css') }}" rel="stylesheet">
    <script src="{{ asset('js/admin.products.js') }}"></script>
    <!-- Editable table -->
    <form class="pl-2" action="{{route('admin')}}" >
        <input class="btn-sm btn-default" type="submit" value="Назад">
    </form>
    <div class="card pt-4">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Административная панель</h3>
        <div class="card-body">
            <div id="table" class="table-editable">

      <span class="table-add float-right mb-3 mr-2"><a href="{{ route('products.create') }}" class="text-success"><i class="fas fa-plus fa-2x"
                                                                                         aria-hidden="true"></i></a></span>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">image</th>
                        <th class="text-center">name</th>
                        <th class="text-center">brand</th>
                        <th class="text-center">articul</th>
                        <th class="text-center">description</th>
                        <th class="text-center">price</th>
                        <th class="text-center">category_id</th>
                        <th class="text-center">publish</th>
                        <th class="text-center">created_at</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td class="pt-3-half" contenteditable="true">{{$product->id}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->imagePath}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->name}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->brand}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->articul}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->description}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->price}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->category_id}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->publish}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$product->created_at}}</td>
                        {{--<td class="pt-3-half">--}}
                            {{--<span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>--}}
                            {{--<span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"--}}
                                                                                         {{--aria-hidden="true"></i></a></span>--}}
                        {{--</td>--}}
                        <td>
                            <form method="get" action="{{ route('products.edit', ['id' => $product->id]) }}">
                                <input class="btn-sm btn-success" type="submit" value="Изменить" />
                                @csrf
                            </form>
                        </td>

                        <td>
                            <form method="post" action="{{ route('products.destroy', ['id' => $product->id]) }}">
                                <input class="btn-sm btn-danger" type="submit" value="Удалить" />
                                <input type="hidden" name="_method" value="delete" />
                                @csrf
                            </form>
                        </td>
                    </tr>
                    <!-- This is our clonable table line -->
                        @endforeach

                </table>
                {{$products->links()}}
            </div>
        </div>
    </div>
    <!-- Editable table -->
    @endsection