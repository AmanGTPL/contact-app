<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Business;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
		// $people =person::all();
		return view('person.index')->with('people', Person::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		return view('person.create')->with('businesses', Business::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
		// $validated = $request->validate([
		// 	'firstname' => 'required',
		// 	'lastname' => 'required',
		// 	'email' => 'nullable|email',
		// ]);
		$request->validate([
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric|digits:10',
		]
		);

		$person = new Person;
		$person -> firstname = $request->input('firstname');
		$person -> lastname = $request->input('lastname');
		$person -> email = $request->input('email');
		$person -> phone = $request->input('phone');
		$person -> business_id = $request->input('business_id');
		$person -> save();

		return redirect(route('person.index'))->with('message','Person Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
		
		return view('person.edit')->with(['person'=>$person, 'businesses'=>Business::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
		// $validated = $request->validate([
		// 	'firstname' => 'required',
		// 	'lastname' => 'required',
		// 	'email' => 'nullable|email',
		// ]);
		$request->validate([
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric|digits:10',
		]
		);

		$person -> firstname = $request->input('firstname');
		$person -> lastname = $request->input('lastname');
		$person -> email = $request->input('email');
		$person -> phone = $request->input('phone');
		$person -> business_id = $request->input('business_id');
		$person -> save();

		return redirect(route('person.index'))->with('message','Person Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
		$person->delete();
		return redirect(route('person.index'))->with('Delete','Person Deleted Successfully');
    }
}
