<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactUsController extends Controller
{
	public function index()
    {
    	//return 'This is Contact Us Page';
    	return view('contact.index');
    }

    public function store()
    {
		dd(request()->all());
    }
}
