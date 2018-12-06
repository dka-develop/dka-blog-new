@extends('layouts.app')

@section('title', $category->title . " - DKA-DEVELOP")

@section('content')
	
	<div class="container">
		
		<div class="row">
			@forelse ($articles as $article)
				
				<div class="col-sm-4 mb-2">

					<div class="card">
					  	<div class="card-body">
						    <h4 class="card-title text-center"><a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a></h4>
						    <h6 class="card-subtitle mb-2 text-muted text-center">
						    	<i class="far fa-calendar-alt"></i>
						    	{{ $article->created_at->format('d.m.Y H:i') }}
						    	({{ $article->created_at->diffForHumans() }})
						    </h6>
						    <p class="card-text">{!! $article->description_short !!}</p>
					  	</div>
					</div>

				</div>

			@empty
				
				<div class="col-sm-12">

					<div class="jumbotron jumbotron-fluid text-center">
						<div class="container-fluid">
						  	<h1 class="display-4">Статьи отсутствуют</h1>
						  	<p class="lead">Вы можете вернуться позже и мы обязательно заполним данный раздел.</p>
						  	<hr class="my-4">
						  	<a class="btn btn-primary btn-lg" href="{{ url('') }}" role="button">Перейти на главную</a>
					  	</div>
					</div>

				</div>

			@endforelse
		</div>
		
		@if ($articles->hasMorePages())
			<div class="card mt-2">
			  	<div class="card-header">
				    {{ $articles->links() }}
			  	</div>
			</div>
		@endif
		
	</div>

@endsection