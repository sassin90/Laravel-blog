@extends('main')
@section('title',' | Create New Post')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>           
            {!! Form::open(array('route' => 'posts.store')) !!}
                {{ Form::label('title', 'Title :') }}
                {{ Form::text('title',null, array('class' => 'form-control'))}}

                {{ Form::label('slug', 'Slug :') }}
                {{ Form::text('slug',null, array('class' => 'form-control'))}}
                
                {{ Form::label('category-id', 'Category :') }}
                {{ Form::select('category-id', $categories, null, array('class' => 'form-control')) }}
                
                {{ Form::label('tags', 'Tags :') }}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                
                {{ Form::label('content', 'Content :') }}
                {{ Form::textarea('content',null,array('class' => 'form-control')) }}
                
                {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;')) }}
            {!! Form::close() !!}   
        </div>
    </div>

@endsection