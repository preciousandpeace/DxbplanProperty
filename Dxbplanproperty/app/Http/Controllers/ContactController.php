<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		$request->validate([
			'name' => 'required|max:200',
			'email' => 'required|email|unique:contacts',
			'subject' => 'required',
			'phone' => 'required',
			'message' => 'required',
		]);

		$contact = new Contact();

		$contact->full_name 	= $request->name;
		$contact->email 		= $request->email;
		$contact->subject 		= $request->subject;
		$contact->phone_number 	= $request->phone;
		$contact->message 		= $request->message;

		$contact->save();

//		session()->flash('success_message', 'Thanks for contacting us, we will get in touch');

		return response()->json([
			'success' 	=> true,
			'message'	=> 'Form has been submitted'
		]);
//		return back()->with('success_message', 'Thanks for contacting us, we will get in touch');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
