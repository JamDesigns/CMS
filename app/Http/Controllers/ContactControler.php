<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactSentMail;
use App\Mail\ReceivedContactMail;
use App\Models\Contact;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;

class ContactControler extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        SEOTools::setTitle(__('Contact Us'));
        SEOTools::setCanonical(request()->url());

        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());

        // Email confirming receipt of the message (for the user)
        Mail::to($request->email)
            ->send(new ContactSentMail());

        // Message receipt notification email (for us)
        Mail::to('info@cms.test')
            ->send(new ReceivedContactMail($contact));

        return redirect('/');
    }
}
