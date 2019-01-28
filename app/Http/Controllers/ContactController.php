<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function getshow()
    {
      return view('contact');
    }

    public function postshow(ContactRequest $request)
    {
      return "bonjour votre nom est :".$request->input('nom');
    }
}
