<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserProfileController extends Controller
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        SEOTools::setTitle(__('User profile'));
        SEOTools::setCanonical(request()->url());

        return view('profile.show', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
