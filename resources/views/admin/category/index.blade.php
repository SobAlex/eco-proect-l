@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">
            <h1>Категории услуг</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Категория</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="col">{{ $category->id }}</th>
                        <td scope="col"><a href="{{ route('admin.category.show', $category->slug) }}">{{ $category->title }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div> -->
    </div>
</div>

@endsection
