<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Contact;
// use Illuminate\Http\Request;

// class ContactController extends Controller
// {
//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required',
//             'message' => 'required'
//         ]);
//         Contact::create($request->all());
//         return redirect()->back()->with('success', 'Message sent successfully');
//     }
// }



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Point;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact-number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'description' => 'required|string'
        ]);



        Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['contact-number'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['description']
        ]);

        Mail::to('mohammad2072002@gmail.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()
               ->with('success', 'Thank you for your message! We will contact you soon.');
    }

    public function index()
    {
        $points = Point::all();
        return view('index',['points'=>$points]);
    }
}
