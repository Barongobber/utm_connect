<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // Get all Posts, ordered by the newest first
        $news = News::latest()->get();

        // Pass Post Collection to view
        return view('posts.index', compact('news'));
    }


    public function create()
    {
        return view('layouts.post.add_news');
    }

    public function show(News $news)
    {
        // Pass current post to view
        return view('client.news', compact('news'));
    }


    public function edit(News $news)
    {
        return view('posts.edit', compact('news'));
    }


    public function store(Request $request)
    {
        // Validate posted form data
        $validated = $request->validate([
            'news_title' => 'required|string|unique:posts|min:5|max:100',
            'news_content' => 'required|string|min:5|max:2000',
            'news_category' => 'required|string|max:30',
            'posted_on' => 'required|string|max:30',
            'news_pic1' => 'required|string|unique:posts|max:255',
            'news_pic2' => 'required|string|unique:posts|max:255',
            'news_pic3' => 'required|string|unique:posts|max:255',
        ]);

        // Create slug from title
        $validated['slug'] = Str::slug($validated['news_title'], '-');

        // Create and save post with validated data
        $news = News::create($validated);

        // Redirect the user to the created post with a success notification
        return redirect(route('client.news', [$news->slug]))->with('notification', 'Post created!');
    }



    public function destroy(News $news)
    {
        // Delete the specified Post
        $news->delete();

        // Redirect user with a deleted notification
        return redirect(route('posts.index'))->with('notification', '"' . $news->title .  '" deleted!');
    }
}
