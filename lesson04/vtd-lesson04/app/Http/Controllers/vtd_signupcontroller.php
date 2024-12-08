<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vtd_SignupController extends Controller
{
    public function index()
    {
        return view('vtd-signup');
    }

    public function signupSubmit(Request $request)
    {
        // Corrected validation rule 'numeric' instead of 'numberic'
        $validationData = $request->validate([
            'id' => 'required|min:5|max:12',
            'password' => 'required|min:7|max:12',
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'address' => 'nullable|string|max:255',
            'country' => 'required|in:VIETNAM,US,UK,CHINA,JAPAN,INDONESIA,PHILIPPINES',
            'zipcode' => 'required|numeric',  // Corrected here
            'email' => 'required|email',
            'sex' => 'required|in:Male,Female',
            'language' => 'required|in:English,Non English',
            'about' => 'nullable|string|max:255'
        ]);

        // Retrieving the validated data
        $id = $request->input('id');
        $password = $request->input('password');
        $name = $request->input('name');
        $address = $request->input('address');
        $country = $request->input('country');
        $zipcode = $request->input('zipcode');
        $email = $request->input('email');
        $sex = $request->input('sex');
        $language = $request->input('language');
        $about = $request->input('about');

        // Displaying the values (you can replace this with actual storage logic)
        return "User ID: " . $id . 
               " Password: " . $password . 
               " Name: " . $name . 
               " Address: " . $address . 
               " Country: " . $country . 
               " Zipcode: " . $zipcode . 
               " Email: " . $email . 
               " Sex: " . $sex . 
               " Language: " . $language . 
               " About: " . $about;
    }
}
