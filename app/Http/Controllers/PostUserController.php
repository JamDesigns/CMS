<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;

class PostUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        SEOTools::setTitle(__('Publicaciones de') . " $user->name");
        SEOTools::setCanonical(request()->url());

        $posts = Post::where('user_id', $user->id)
            ->where('status', 'published')
            ->where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        if ($posts->count() === 0) {
            abort(404);
        }

        return view('posts.user.index', compact('posts', 'user'));
    }
}
