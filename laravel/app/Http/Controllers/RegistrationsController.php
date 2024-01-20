<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
   
    public function index()
    {
        $registration = Registration::all();
        return view('aldrin')->with('aldrins', $registration);
    }

    function save_registrations(Request $request){
        $validatedData = $request->validate([
            'Id' => 'integerIncrements',
            'eventname' => 'required|string|max:500',
            'date' => 'required|string|max:500',
            'location' => 'required|string|max:500',
            'attendees' => 'required|string|max:500',
        ]);

        registration::create($validatedData);

        return back();
    }

    function delete_registrationss($id){
        $registrations = registrations::find($id);
        $registrations->delete();
        return back();
    }

    function update_registrationss($id){
        $registrations = registrations::find($id);
        return view('update_registrationss', compact('registrations'));
    }

    function save_updated_registrationss(Request $request){
        $validatedData = $request->validate([
            'eventname' => $request->update_eventname,
            'date' => $request->update_date,
            'location' => $request->update_location,
            'attendees' => $request->update_attendees,
        ]);
        registrations::updated($validatedData);
        return back();
    }
    
   
}
