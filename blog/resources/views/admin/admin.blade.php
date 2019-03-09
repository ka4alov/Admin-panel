@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/side.css') }}" rel="stylesheet">


<div class="sidebar">
    <a href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Главная</a>
    <a href="{{ route('users.index') }}"><i class="fa fa-fw fa-wrench"></i> Пользователи</a>
    <a href="{{ route('products.index') }}"><i class="fa fa-fw fa-user"></i> Продукты</a>
    <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Настройки</a>
</div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection