@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-7">

            <h1 class="mb-3">Добро пожаловать, {{ $user->name }}!</h1>

            @include('includes.admin-nav-content')

        </div>
    </div>
</div>

@endsection
