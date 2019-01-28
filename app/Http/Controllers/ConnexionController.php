<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConnexionRequest;
use App\User;

class ConnexionController extends Controller
{
  public function getshow()
  {
    return view('connexion');
  }

  public function postshow(ConnexionRequest $request)
  {
    $user = new User();
    $userin= Request::all();
    $user->password = $userin['password'];
    $user->name = $userin['nom'];
    $user->email = $userin['email'];
    $user->save();

    return "bonjour votre nom est :".$request->input('email').", votre mot de passe est ".$request->input('password');
  }
}
