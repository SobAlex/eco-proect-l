@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">
            <h1>Мои предприятия</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Предприятие</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $contact->id }}</th>
                        <td><a href="{{ route('admin.contact.show', $contact->id) }}">{{ $contact->name_firm }}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div>
    </div>
</div>

@endsection
