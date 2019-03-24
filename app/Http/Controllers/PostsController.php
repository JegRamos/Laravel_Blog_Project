<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        $posts_m = Post::orderBy('updated_at', 'desc')->simplePaginate(10);

        return view('posts.index', compact('posts', 'posts_m'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $validatedData = request()->validate([
            'title' => ['required', 'max:50'],
            'body' => ['required', 'max:200000']
        ]);

        Post::create($validatedData);

        request()->session()->flash('message', 'You successfuly created a new post!');
        request()->session()->flash('alert-class', 'alert-success');

        return redirect(route('posts.index'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post){

        $validatedData = request()->validate([
            'title' => ['required', 'max:50'],
            'body' => ['required', 'max:900000']
        ]);

        $post->update($validatedData);

        request()->session()->flash('message', 'The post has been successfuly edited!');
        request()->session()->flash('alert-class', 'alert-success');

        return redirect(route('posts.index'));
    }

    public function destroy(Post $post){
        request()->session()->flash('message', $post->title . ' has been deleted!');
        request()->session()->flash('alert-class', 'alert-warning');

        $post->delete();

        return redirect(route('posts.index'));
    }
}
