@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <form action="{{ route('users.index') }}">
            <main class="py-4">
                <input class="btn-sm btn-primary" type="submit" value="Назад" />
            </main>
        </form>
        <form method="POST" action="{{ route('users.update', ['id' => $users->id]) }}">
        Name<input name="name" value="{{$users->name}}" id="name" type="text" class="form-control">
        Email<input name="email" value="{{$users->email}}" id="email" type="text" class="form-control">
        Phone<input name="phone" value="{{$users->phone}}" id="phone" type="text" class="form-control">
        Role<input name="role" value="{{$users->role}}" id="role" type="number" class="form-control" >
        <main class="py-4">
            <input class="btn-sm btn-success" type="submit" value="Изменить" />
            <input type="hidden" name="_method" value="PUT" />
        </main>

        @csrf
    </form>
    </div>
@endsection