@extends('admin.layouts.app')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent

    <a href="{{ route('admin.article.create') }}" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Создать</a>

    <table class="table table-striped table-borderless">
        <thead class="thead-dark">
            <th>Наименование</th>
            <th class="text-center">Публикация</th>
            <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td class="text-center">
                    <form id="published-form-{{ $article->id ?? '' }}" class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
                        @method('PUT')
                        @csrf
                        
                        @if($article->published)
                            <i class="far fa-check-square fa-2x text-info" onclick="event.preventDefault();
                                   document.getElementById('published-form-{{ $article->id }}').submit();"></i>
                            <input type="hidden" name="published" value="0">
                        @else
                            <i class="fas fa-times fa-2x text-danger" onclick="event.preventDefault();
                                   document.getElementById('published-form-{{ $article->id }}').submit();"></i>
                            <input type="hidden" name="published" value="1">
                        @endif
                    </form>
                </td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('admin.article.destroy', $article) }}" method="post">
                        @method('DELETE')
                        @csrf
                    
                        <a class="btn btn-primary" href="{{ route('admin.article.edit', $article) }}"><i class="fa fa-edit"></i></a>

                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    {{ $articles->links() }}
                </td>
            </tr>
        </tfoot>
    </table>

</div>

@endsection
