<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Http\Controllers\PostController;

use Illuminate\Http\Request;

class EditController extends Controller
{
    // Show the edit form for a specific post
    public function edit($id)
    {
        // Retrieve the post by ID
        $post = Post::findOrFail($id);
        
        // Pass the post data to the edit view
        return view('posts.edit', compact('post'));
    }

    // Handle the form submission to update the post
    public function update(Request $request, $id)
    {
        // Validate the form input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Find the post by ID
        $post = Post::findOrFail($id);

        // Update the post with new data
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save(); // Save the updated post

        // Redirect back with a success message
        return redirect()->route('posts.edit', $id)->with('success', 'Post updated successfully');
    }
}
