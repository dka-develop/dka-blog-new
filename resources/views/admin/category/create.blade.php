@extends('admin.layouts.app')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{ route('admin.category.store') }}" method="post">
        @csrf

        {{-- Form include --}}
        @include('admin.category._form')
    
    </form>

</div>

@endsection
