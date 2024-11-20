<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    function index(): View {
        $posts = Post::all();

        return view("posts.index", compact("posts"));
    }

    function show(Post $post) : View {
        return view("posts.show", compact("post"));
    }

    function create() : View {
        return view("posts.create", ["post"=>new Post()]);
    }

    function store(PostFormRequest $request) : RedirectResponse
    {
        $post = Post::create($request->validated());
        return redirect()->route("posts.show", ["post"=>$post->id])->with('success', "L'article a bien été créé");
    }

    function edit(Post $post) : View {
        return view("posts.edit", ["post"=>$post]);
    }

    function update(Post $post, PostFormRequest $request) : RedirectResponse
    {
        $post->update($request->validated());
        return redirect()->route("posts.show", ["post"=>$post->id])->with('success', "L'article a bien été mis à jour");
    }

    function destroy(Post $post) : RedirectResponse
    {
        $post->delete();
        return redirect()->route("posts.index")->with('success', "L'article a bien été supprimé");
    }
}
