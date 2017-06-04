<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Session;

class PostsController extends Controller
{
    public function __construct(){

      $this->middleware('auth');
    }

    public function index(){
      //$posts = Post::with('category')->get();
      //$posts = Post::with('category')->orderBy('id','desc')->paginate(10);
    	$posts = Post::with('category')->paginate(10);
    	return view('posts.index',compact('posts'));
    }

    public function create(){
        
      $categories = Category::pluck('name','id');
      $tags = Tag::all();
    	return view('posts.create',compact('categories','tags'));
    }

    public function store(Request $request){
       
      $this->validate($request,array(
          'title'   => 'required | max:10',
          'content' => 'required | max:250',
          'slug'    => 'required | alpha_dash | min:5| max:20| unique:posts,slug'
      ));

      $post = Post::create($request->all());
      $post->tags()->sync($request->input('tags'));
      Session::flash('success','The blog post was successfully saved!');
    	return redirect(route('posts.show',$post->id));
    	
    }

    public function show($id){

        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    public function edit($id){

      $post = Post::findOrFail($id);
      $categories = Category::pluck('name','id');
      $tags = Tag::pluck('name', 'id');
      return view('posts.edit',compact('post','categories','tags'));
    }

    public function update(Request $req, $id){

      $post = Post::findOrFail($id);
      
      if($req->input('slug') == $post->slug){
        $this->validate($req,array(
            'title'   => 'required | max:10',
            'content' => 'required | max:250'
       ));
      
      }else{
        
        $this->validate($req,array(
            'title'   => 'required | max:10',
            'content' => 'required | max:250',
            'slug'    => 'required | alpha_dash | min:5| max:20| unique:posts,slug'
       ));
      }

      $post = Post::findOrFail($id);
      $post->update($req->all());
      $post->tags()->sync($req->input('tags'));
      Session::flash('success','The blog post was successfully saved!');
      return redirect(route('posts.show',$post->id));
    }

    public function destroy($id){

      $post = Post::findOrFail($id);
      $post->tags()->detach();
      $post->delete();
      Session::flash('success','The blog post was successfully deleted!');
      return redirect(route('posts.index'));
    }
}
