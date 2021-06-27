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
        dd('tedddg');
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'objet' => $input['objet'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('fatima.elfaik@gmail.com', 'Admin')->subject($request->get('objet'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
