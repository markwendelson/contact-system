<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        $search = $request->search;

        $contacts = Contact::when($request->search, function($q, $search) {
           return $q->where('name', 'LIKE', "%{$search}%")
            ->orWhere('company', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('phone', 'LIKE', "%{$search}%");
        })->where([
            'user_id' => \Auth::id()
        ])->latest()->paginate(2);

        return view('contact.index', compact('contacts', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $request->validated();

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->company = $request->company;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->user_id =\Auth::id();
        $contact->save();

        \Session::flash('success', 'Contact has been successfuly save.');

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $request->validated();

        $contact1 = Contact::find($contact->id);
        $contact1->name = $request->name;
        $contact1->company = $request->company;
        $contact1->email = $request->email;
        $contact1->phone = $request->phone;
        $contact1->save();

        \Session::flash('success', 'Contact has been successfuly updated.');

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        return Contact::find($contact->id)->delete();
    }
    
}
