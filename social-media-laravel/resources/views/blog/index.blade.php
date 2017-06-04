@extends('main')

@section('title', " | Blog ")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach($posts as $post)
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>{{ $post->title }}</h1>
				<h4>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h4>

				<p>{{ substr($post->content, 0, 200) }} {{ strlen($post->content) > 200 ? " ..." : "" }}</p>
				<a href="{{  url('blog'.$post->single, [$post->slug]) }}" class="btn btn-primary">Read More</a>
				<hr>
			</div>
		</div>
	
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>

@endsection