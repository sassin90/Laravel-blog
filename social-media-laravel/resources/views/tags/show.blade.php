@extends('main')
@section('title'," | $tag->name Tag")
@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tag->name }} Tag <small>{{ $tag->post()->count() }} Posts</small></h1> 
		</div>
		<div class="col-md-2">
			<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
		</div>
		<div class="col-md-2">
			{!! Form::open(array('route' => array('tags.destroy', $tag->id), 'method' => 'DELETE'))!!}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-top:20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Tags</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($tag->post as $pt)
					<tr>
						<th>{{ $pt->id }}</th>
						<td>{{ $pt->title }}</td>
						<td>
							@foreach($pt->tags as $tag)
								<span class="label label-default">{{ $tag->name }}</span>
							@endforeach
						</td>
						<td><a href="{{ route('posts.show', $pt->id)}}" class="btn btn-default btn-xs">View</a></td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
	
@endsection