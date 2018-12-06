@extends('admin.layouts.app')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Создание новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{ route('admin.article.store') }}" method="post">
        @csrf
    
        {{-- Form include --}}
        @include('admin.article._form')

        <input type="hidden" name="created_by" value="{{ Auth::id() }}">
    </form>

</div>

@endsection
