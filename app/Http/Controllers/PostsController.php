<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){ //called from Route::get('/posts/','PostsController@index');
        return view('index',[]);
    }

    public function show(){ //called  from Route::get('/posts/{post}','PostsController@show');
        return 'Show';
     }

    public function create(){ //called from Route::get('/posts/create','PostsController@create');
        return view('addPost',[]);
    }

    public function store(Request $request){ //called from Route::post('/posts/store','PostsController@store');
        $addPost=[
            'title' => $request->input('title'),
            'comment' => $request->input('comment')
        ];
        return view('show',['post'=>$addPost]); //In case of passing an associative array
    }

    public function destroy(){ //called  from Route::get('/posts/{post}','PostsController@show');
        return 'Destroy';
    }
}

