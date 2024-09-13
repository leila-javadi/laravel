<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('title', 'Posts List')

@section('content')

<div class="post-list">
    <h1>List of Posts</h1>

    @foreach($posts as $post)
        <div class="post-item">
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['description'] }}</p>

            <div class="w-100 d-flex justify-content-between mt-3">
                <a class="btn btn-outline-primary btn-sm" href=""> Edite Post</a>
            </div>
        </div>
    @endforeach
    <div class="w-100 d-flex justify-content-between mt-3">
                <a class="btn btn btn-outline-primary btn-sm" href="{{ route('posts.create') }}"> New Post </a>
               
            </div>
</div>
@endsection
