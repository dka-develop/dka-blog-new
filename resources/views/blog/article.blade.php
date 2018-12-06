@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')

	<div class="container">

		<div class="card">
		  	<div class="card-body">
			    <h1 class="card-title text-center">{{ $article->title }}</h1>
			    <h6 class="card-subtitle mb-2 text-muted text-center">
			    	<i class="far fa-calendar-alt"></i>
			    	{{ $article->created_at->format('d.m.Y H:i') }}
			    	({{ $article->created_at->diffForHumans() }})
			    </h6>
			    <p class="card-text">{!! $article->description !!}</p>
		  	</div>
		</div>

	</div>

@endsection