<?php
// app/Http/Controllers/CreateController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    // Method to display the form
    public function create()
    {
        return view('posts.create'); // Return the view for the form
    }

    // Method to handle form submission
    public function article(Request $request)
    {
        // For now, simply dump the submitted values
        $title = $request->input('title');
        $description = $request->input('description');
        
        // Echo or dump the values
        return "Title: $title, Description: $description";

        // OR to dump the values:
        // dd($request->all());
    }
}
