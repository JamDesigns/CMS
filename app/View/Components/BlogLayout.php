<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use Illuminate\View\View;

class BlogLayout extends Component
{
    public function render(): View
    {
        $totalPosts = 0;
        $posts = [];
        $postsRecent = [];
        $categories = [];
        $roles = Role::get();

        $totalPosts = Post::where('status', 'published')
            ->where('created_at', '<=', Carbon::now())
            ->count();

        $postsRecent = Post::where('status', 'published')
            ->where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        if ($totalPosts > 0) {
            $categories = Category::joinSub(Post::select('category_id', DB::raw('COUNT(category_id) as posts_count'))
                ->where('status', 'published')
                ->where('created_at', '<=', Carbon::now())
                ->groupBy('category_id'), 'posts_count', function (JoinClause $join) {
                $join->on('categories.id', '=', 'posts_count.category_id');
            })
                ->groupBy('categories.id')
                ->orderBy('posts_count', 'desc')
                ->limit(10)
                ->get();
        }

        return view('layouts.blog', compact('categories', 'totalPosts', 'roles', 'postsRecent'));
    }
}
