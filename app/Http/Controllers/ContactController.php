<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('pages.contact');
    }

    public function storeContactForm(Request $request)
    {
    //  $this->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'objet' => 'required',
    //         'content' => 'required',
    //    ]);

        $input = $request->all();
       // return $request->email;
       // Contact::create($request->email);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'objet' => $input['objet'],
            'content' => $input['content'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('Ajouter Votre mail ici', 'Admin')->subject($request->get('objet'));
        });
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
