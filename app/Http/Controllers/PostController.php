<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::create($validated);

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
{
    return view('posts.show', compact('post'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Post $post)
{
    $validated = $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $post->update($validated);

    return redirect('/posts');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('posts.index');
}

public function updateStatus(Request $request, Post $post)
{
    $request->validate([
        'status' => 'required|in:draft,published,archived',
    ]);

    $post->status = $request->status;
    $post->save();

    return redirect()->route('posts.show', $post->id)
                     ->with('success', 'Status updated successfully.');
}

 public function displayCar()
    {
        $posts = Post::all();
        return view('cars.index', ['cars' => $cars]);
    }

}