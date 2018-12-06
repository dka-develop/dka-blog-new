@extends('admin.layouts.app')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Редактирование новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{ route('admin.article.update', $article) }}" method="post">
        @method('PUT')
        @csrf

        {{-- Form include --}}
        @include('admin.article._form')

        <input type="hidden" name="modified_by" value="{{ Auth::id() }}">
    </form>

</div>

@endsection
