<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index () {
    	return view('posts.index');
    }

    function show () {
    	return view('posts.show');
    }

    function create () {
    	return view('posts.create');
    }

    function store () {

    	$this->validate(request(), [
    		'title' => 'required',
    		'body'  => 'required'
     		]);

    	Post::create([
    		'title' => request('title'),
    		'body'  => request('body')
    		]);

    	return redirect('/');
    }
}
