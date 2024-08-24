<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $searchResults = (new Search())
            ->registerModel(Post::class, ['title', 'body'])
            ->registerModel(Page::class, [
                'title',
                'intro',
                'content_blocks',
                'hero_image_title',
                'overview_title',
                'overview_description',
            ])
            ->search($search);

        return view('search.index', compact('searchResults', 'search'));
    }
}
