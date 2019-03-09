@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/side.css') }}" rel="stylesheet">
    <script src="{{ asset('js/admin.products.js') }}">
    </script>
    <form class="pl-2" action="{{route('admin')}}" >
        <input class="btn-sm btn-default" type="submit" value="Назад">
    </form>
    <div class="card pt-4">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Административная панель</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="{{ route('users.create') }}" class="text-success"><i class="fas fa-plus fa-2x"
                                                                                                                     aria-hidden="true"></i></a></span>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Created_at</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td class="pt-3-half" contenteditable="true">{{$user->id}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$user->name}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$user->email}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$user->phone}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$user->role}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$user->password}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$user->created_at}}</td>
                            {{--<td class="pt-3-half">--}}
                            {{--<span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>--}}
                            {{--<span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"--}}
                            {{--aria-hidden="true"></i></a></span>--}}
                            {{--</td>--}}
                            <td>
                                <form method="get" action="{{ route('users.edit', ['id' => $user->id]) }}">
                                    <input class="btn-sm btn-success" type="submit" value="Изменить" />
                                    @csrf
                                </form>
                            </td>

                            <td>
                                <form method="post" action="{{ route('users.destroy', ['id' => $user->id]) }}">
                                    <input class="btn-sm btn-danger" type="submit" value="Удалить" />
                                    <input type="hidden" name="_method" value="delete" />
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                    @endforeach

                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>
    <!-- Editable table -->
@endsection