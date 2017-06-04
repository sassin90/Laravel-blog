@extends('main')

@section('title', ' | Edit Tag')

@section('content')

		{!! Form::model($tag, ['route' => ['tags.update', $tag->id ], 'method' =>'PUT']) !!}
				{{ Form::label('name', 'Name :') }}
				{{ Form::text('name', null, array('class' => 'form-control input-lg')) }}
				{{ Form::submit('Save Changes', array('class' => 'btn btn-success', 'style' => 'margin-top:20px;')) }}
		{!! Form::close() !!}	
	</div>

@endsection