@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/side.css') }}" rel="stylesheet">
<div class="sidebar">
    <a href="{{ route('admin') }}"><i class="fa fa-fw fa-home"></i> Главная</a>
    <a href="{{ route('admin.users') }}"><i class="fa fa-fw fa-wrench"></i> Пользователи</a>
    <a href="{{ route('products.index') }}"><i class="fa fa-fw fa-user"></i> Продукты</a>
    <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Настройки</a>
</div>

<div class="main">
    <h2>Sidebar with Icons</h2>
    <p>This side navigation is of full height (100%) and always shown.</p>
    <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
    <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
</div>
@endsection