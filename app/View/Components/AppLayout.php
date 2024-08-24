<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use Illuminate\View\View;
use Spatie\Searchable\Search;

class AppLayout extends Component
{
    public function render(): View
    {
        $totalPosts = 0;
        $posts = [];
        $roles = Role::get();

        $totalPosts = Post::where('status', 'published')
            ->where('created_at', '<=', Carbon::now())
            ->count();

        return view('layouts.app', compact('totalPosts', 'roles'));
    }
}
