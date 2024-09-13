<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Manually defining three posts as an array of associative arrays.
        $posts = [
            [
                'title' => 'First Post',
                'description' => 'This is the description for the first post.'
            ],
            [
                'title' => 'Second Post',
                'description' => 'This is the description for the second post.'
            ],
            [
                'title' => 'Third Post',
                'description' => 'This is the description for the third post.'
            ]
        ];

        // Passing the posts data to the view
        return view('posts.index', compact('posts'));
    }

}




