<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class homeController{
public function about(){
    return view('home.about');
}
public function index(){
    return view('home.userpage');
}
public function services(){
    return view('home.service');
}
public function cosmic(){
    return view('home.cosmic-dentistry');
}
public function implant(){
    return view('home.implant-dentistry');
}
public function root(){
    return view('home.rootcanal');
}
public function orthodontics(){
    return view('home.orthodontics');
}
public function removable(){
    return view('home.removabledentures');
}
public function minor(){
    return view('home.minororal');
}
public function scaling(){
    return view('home.scaling');
}
public function wisdom(){
    return view('home.wisdomtooth');
}



public function doctors(){
    return view('home.doctors');
}

public function bishwo(){
    return view('home.bishwo');
}
public function dinesh(){
    return view('home.dinesh');
}
public function merina(){
    return view('home.merina');
}
public function muna(){
    return view('home.muna');
}

public function pricing(){
    return view('home.pricing');
}



public function contact()
{
    return view('home.contact');
}

/**
 * Write code on Method
 *
 * @return response()
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:10|numeric',
        'subject' => 'required',
        'message' => 'required'
    ]);

    Contact::create($request->all());

    return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
}
}
