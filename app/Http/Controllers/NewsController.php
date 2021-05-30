<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function create()
    {
        return view('layouts.post.add_news');
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
        $validated['slug'] = Str::slug($validated['title'], '-');

        // Create and save post with validated data
        $post = News::create($validated);

        // Redirect the user to the created post with a success notification
        return redirect(route('posts.show', [$post->slug]))->with('notification', 'Post created!');
    }
}
