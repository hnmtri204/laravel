<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use Illuminate\Http\Request; // Import the Request class

class PostController extends Controller
{
    public function index(Request $request)
    {
        // Get all posts and display them in a view
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Request $request, $postId)
    {
        // Get a specific post and display it in a view
        $post = Post::find($postId);
        if (!$post) {
            abort(404); // Handle post not found
        }
        return view('posts.show', ['post' => $post]);
    }

    public function create(Request $request)
    {
        // Display a form to create a new post
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate and save a new post
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = new Post;
        $post->fill($data);
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được tạo!');
    }

    public function edit(Request $request, $postId)
    {
        // Get a specific post and display an edit form
        $post = Post::find($postId);
        if (!$post) {
            abort(404); // Handle post not found
        }
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $postId)
    {
        // Validate and update an existing post
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::find($postId);
        if (!$post) {
            abort(404); // Handle post not found
        }
        $post->fill($data);
        $post->save();

        return redirect()->route('posts.show', $post->id)->with('success', 'Bài viết đã được cập nhật!');
    }

    public function destroy(Request $request, $postId)
    {
        // Delete a specific post
        $post = Post::find($postId);
        if (!$post) {
            abort(404); // Handle post not found
        }
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được xóa!');
    }
}
