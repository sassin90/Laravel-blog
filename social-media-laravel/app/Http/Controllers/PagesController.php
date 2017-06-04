<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
      
    	//$posts = Post::with('category')->paginate(10);
    	$posts = Post::orderBy('created_at','desc')->limit(4)->get();
    	return view('pages.welcome',compact('posts'));
    }

    public function single($slug){
      
    	$posts = Post::where('slug', '=', $slug)->first();
    	return view('blog.single',compact('posts'));
    } 

    public function archive(){
      
    	$posts = Post::paginate(10);
    	return view('blog.index',compact('posts'));
    }
}
