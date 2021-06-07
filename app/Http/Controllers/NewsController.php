<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index(Request $r)
    {
        $allnews = News::where('news_id', $r->id)->get();
        $news = $allnews[0];

        $today = new Carbon;

        $posted_on = ($news->posted_on > $today);
        $newsdesc = [
            'news' => $news,
            'posted_on' => $posted_on,
        ];

        // Pass Post Collection to view
        return view('client.view-news', compact('newsdesc'));
    }

    public function addNews(Request $r)
    {
        $today = Carbon::now();

        $pic1 = $r->file('news_pic1');
        $pic2 = $r->file('news_pic2');
        $pic3 = $r->file('news_pic3');

        $pic1name = $pic1->getClientOriginalName();
        if ($pic2 != null) $pic2name = $pic2->getClientOriginalName();
        else $pic2name = null;
        if ($r->news_pic3 != null) $pic3name = $pic3->getClientOriginalName();
        else $pic3name = null;

        $news = new News([
            'news_category'  => $r->news_category,
            'news_title' => $r->news_title,
            'news_content' => $r->news_content,
            'posted_on' => $today,
            'news_pic1' => $r->$pic1name,
            'news_pic2' => $r->$pic1name,
            'news_pic3' => $r->$pic1name,
        ]);
        $news->save();

        $newPath = public_path() . '/images/news/' . $news->news_id;

        $pic1->move($newPath, $pic1name);
        if ($r->news_pic2 != null) $pic2->move($newPath, $pic2name);
        if ($r->news_pic3 != null) $pic3->move($newPath, $pic3name);

        return redirect('table');
    }

    public function destroy(News $news)
    {
        // Delete the specified Post
        $news->delete();

        // Redirect user with a deleted notification
        return redirect(route('posts.index'))->with('notification', '"' . $news->title .  '" deleted!');
    }
}
