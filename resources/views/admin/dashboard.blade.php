@extends('admin.layouts.app')

@section('content')

<div class="container">

    <div class="row text-center">
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Категорий {{ $categoryCount }}</span></h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Материалов {{ $articleCount }}</span></h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Посетителей 0</span></h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Сегодня 0</span></h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-block btn-dark" href="{{ route('admin.category.create') }}">Создать категорию</a>
            @foreach ($categories as $category)
                <a class="list-group-item" href="{{ route('admin.category.edit', $category) }}">
                    <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                    <p class="list-group-item-text">
                        {{ $category->articles()->count() }}
                    </p>
                </a>
            @endforeach
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-dark" href="{{ route('admin.article.create') }}">Создать материал</a>
            @foreach ($articles as $article)
                <a class="list-group-item" href="{{ route('admin.article.edit', $article) }}">
                    <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                    <p class="list-group-item-text">
                        {{ $article->categories()->pluck('title')->implode(', ') }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>

</div>

@endsection
