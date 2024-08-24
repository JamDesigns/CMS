<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        SEOTools::setTitle(__('Blog'));
        SEOTools::setDescription(__('Publications show our particular way of communicating'));

        $posts = Post::where('status', 'published')
            ->where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        if ($posts->count() === 0) {
            abort(404);
        }

        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        SEOTools::setTitle(__($post->title));
        SEOTools::setDescription(__(strip_tags(substr($post->body, 0, 250)).'...'));
        SEOTools::setCanonical(substr(request()->url(), 0, strrpos(request()->url(), "/$post->slug")));

        $comments = $post->comments()
            ->whereNull('parent_id')
            ->with('children')
            ->where('status', true)
            ->orderBy('created_at', 'desc')
            ->limit(20)
            ->get();
        $previousPost = Post::where('created_at', '>=', $post->created_at)
            ->where('id', '<>', $post->id)
            ->where('status', '=', 'published')
            ->orderBy('created_at', 'ASC')
            ->first();
        $nextPost = Post::where('created_at', '<=', $post->created_at)
            ->where('id', '<>', $post->id)
            ->where('status', '=', 'published')
            ->orderBy('created_at', 'desc')
            ->first();

        return view('posts.show', compact('post', 'previousPost', 'nextPost', 'comments'));
    }
}
