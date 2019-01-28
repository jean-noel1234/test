<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;

class PhotoController extends Controller
{
    public function getshow()
    {
      return view('photo');
    }

    public function postshow(ImagesRequest $request)
    {
      $image = $request->file('image');

  		if($image->isValid())
  		{
  			$chemin = config('images.path');

  			$extension = $image->getClientOriginalExtension();

  			do
        {
  				$nom = str_random(10) . '.' . $extension;
  			}
        while(file_exists($chemin . '/' . $nom));

  			if($image->move($chemin, $nom))
        {
  				return 'photo_ok';
  			}
		   }

		return redirect('photo')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
    }
}
