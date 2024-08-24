<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        SEOTools::setTitle(__($category->name));
        SEOTools::setDescription(__('List of posts belonging to the category: ') . __($category->name));
        SEOTools::setCanonical(substr(request()->url(), 0, strrpos(request()->url(), '/')));

        $posts = Post::with('media', 'user', 'category')
            ->where('category_id', '=', $category->id)
            ->where('status', '=', 'published')
            ->where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'DESC')
            ->paginate(8);
        $countPosts = $posts->count();

        return view('categories.show', compact('category', 'posts', 'countPosts'));
    }
}
