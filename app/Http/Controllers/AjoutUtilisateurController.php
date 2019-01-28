<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\AjoutUtilisateurRequest;
use App\User;

class AjoutUtilisateurController extends Controller
{
  public function getshow()
  {
    return view('ajout_utilisateur');
  }

  public function postshow(AjoutUtilisateurRequest $request)
  {
    // Créer une instance utilisateur
    // recupérer toutes tes inputs
    // Mettre tes inputs dans ton instance utilisateur
    // save
    $user = new User();
    $userin= Request::all();
    $user->password = $userin['password'];
    $user->name = $userin['nom'];
    $user->email = $userin['email'];
    $user->save();
    //dd($user);
    return view('ajout_utilisateur_ok');
  }
}
