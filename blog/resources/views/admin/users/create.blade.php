@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <input name="name"  value="name" type="text" class="form-control">
        <input name="email"  value="email" type="email" class="form-control">
        <input name="phone"  value="phone" type="text" class="form-control">
        <input name="password"  value="password" type="password" class="form-control">
        <input class="btn btn-primary" type="submit" value="Сохранить" />
    </form>
@endsection