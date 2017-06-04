@extends('main')

@section('title', " | $posts->title ")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $posts->title }}</h1>
			<p>{{ $posts->content }}</p>
			<hr>
			<p>Posted In: {{ $posts->category->name }}</p>
		</div>
	</div>

@endsection