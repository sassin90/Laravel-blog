@extends('main')

@section('title', ' | Edit Blog Post')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id ], 'method' =>'PUT']) !!}
			<div class="col-md-8">
				{{ Form::label('title', 'Title :') }}
				{{ Form::text('title', null, array('class' => 'form-control input-lg')) }}
				
				{{ Form::label('slug', 'Slug :', array('class' => 'btn-h1-spacing')) }}
				{{ Form::text('slug', null, array('class' => 'form-control ')) }}

				{{ Form::label('category-id', 'Category :', array('class' => 'btn-h1-spacing')) }}
                {{ Form::select('category-id',$categories, null, array('class' => 'form-control')) }}

                {{ Form::label('tags', 'Tags :') }}
                {{ Form::select('tags[]',$tags, null, array('class' => 'form-control select2-multi form-control', 'multiple' => 'multiple')) }}
				
				{{ Form::label('content', 'Content :', array('class' => "btn-h1-spacing")) }}
				{{ Form::textarea('content', null, array('class' => 'form-control')) }}
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Created At :</label>
						<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
					</dl>
					<dl class="dl-horizontal">
						<label>Last Update :</label>
						<p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class' => "btn btn-danger btn-block")) !!}
						</div>
						<div class="col-sm-6">
							{{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
						</div>
					</div>
				</div>
			</div>
		{!! Form::close() !!}	
	</div>

@endsection