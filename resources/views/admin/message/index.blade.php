@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">
            <h1>Заявки</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Номер заявки</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Тема</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($messages as $message)

                    <tr>
                        <td><a href="{{ route('admin.message.show', $message->id) }}">{{ $message->id }}</a></td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div>
    </div>
</div>

@endsection
