<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   public function index(){
       return view('posts.index');
   }

   public function show(){
       return view('posts.show');
   }

   public function create(){
       return view('posts.create');
   }

   public function store(){
        //testing
       //dd(request()->all());
       //dd(request('body'));
       //dd(request(['title','body']));


       /***
        * Solution 1
        *
        */

      /* //create new post using the request data

       $post = new Post();

       $post->title=request('title');
       $post->body=request('body');

       //save it to database

       $post->save();

       //redirect

       return redirect('/');*/


       /***
        * Solution 2
        *
        */

       /*Post::create([
           'title'=>request('title'),
           'body'=>request('body')
       ]);*/



       /***
        * Solution 3
        *
        */

       Post::create(request(['title','body']));

       return redirect('/');

   }
}
