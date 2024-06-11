@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">

            <h1>Заказ номер: {{ $message->id }}</h1>

            <p><b>Имя:</b> {{ $message->name }}</p>

            <p><b>Email:</b> {{ $message->email }}</p>

            <p><b>Тел.:</b> {{ $message->phone }}</p>

            <p><b>Тема:</b> {{ $message->subject }}</p>

            <p><b>Сообщение:</b> {{ $message->message }}</p>
        </div>
        <!-- <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div> -->
    </div>
</div>
@endsection
