<?php namespace Vector\Http\Controllers;

/**
 * 
 */
 class WelcomeController extends Controller
 {
     
    public function index()
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        return view('inicio');
    }
} 