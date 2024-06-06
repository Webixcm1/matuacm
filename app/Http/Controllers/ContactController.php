<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Notifications\ContactMessageNotification;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * show contact page
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('pages.contact');
    }

    /**
     * send message
     * 
     * @param \App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMessage(ContactRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Notification::route('mail', 'danielseverin86@gmail.com')->notify(new ContactMessageNotification($data));

        return redirect()->route('contact.index')->with('success', 'Votre message a bien été envoyer.');
    }
}
