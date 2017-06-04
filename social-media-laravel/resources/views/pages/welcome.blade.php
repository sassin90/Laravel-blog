@extends('main')
@section('title','| HomePage')
@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to My Blog</h1>
          <p class="lead">Thank you to much for visiting. this is my test website built with Laravel . please visit my latest post !</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="post">
          @foreach($posts as $post)
            <h3>{{$post->title}}</h3>
            <p>
              {{ substr($post->content, 0, 200) }} {{ strlen($post->content) > 200 ? " ..." : "" }}
            </p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read more </a>
          @endforeach
        </div>
        <hr>        
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>This is a side bar</h2>
      </div>
    </div>

@endsection
