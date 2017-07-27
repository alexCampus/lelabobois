<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    public function index(request $request)
    {
      $images = [];
      if ($request['categorie']) {
        if ($request['categorie'] === 'menuiserie') {
          $imgs = Storage::files('public/menuiserie');
        }
        if ($request['categorie'] === 'charpente') {
          $imgs = Storage::files('public/charpente');
        }
        if ($request['categorie'] === 'couverture') {
          $imgs = Storage::files('public/couverture');
        }
        if ($request['categorie'] === 'constructionBois') {
            $imgs = Storage::files('public/constructionBois');
        }
        if ($request['categorie'] === 'renovation') {
            $imgs = Storage::allFiles('public/renovation');
        }
        if ($request['categorie'] === 'zinguerie') {
            $imgs = Storage::allFiles('public/zinguerie');
        }
        if ($request['categorie'] === 'slide') {
            $imgs = Storage::allFiles('public/slide');
        }
        if ($request['categorie'] === 'all') {
          $imgs = Storage::allFiles('public/');
        }

      } else {
        $imgs = Storage::allFiles('public/');
      }

      foreach ($imgs as $image) {
         $img = Storage::url($image);
         array_push($images, $img);
      }

     return view('upload.upload', ['images' => $images]);
    }

    public function store(request $request) 
    {
    	if ($request->hasFile('image'))
    	{
    		$img = $request->file('image')->getClientOriginalName();
    		if ($request['optradio'] === 'menuiserie') {
    			$request->file('image')->storeAs('public/menuiserie', $img);
       		}
       		if ($request['optradio'] === 'charpente') {
    			$request->file('image')->storeAs('public/charpente', $img);
       		}
       		if ($request['optradio'] === 'couverture') {
    			$request->file('image')->storeAs('public/couverture', $img);
       		}
          if ($request['optradio'] === 'constructionBois') {
              $request->file('image')->storeAs('public/constructionBois', $img);
          }
          if ($request['optradio'] === 'renovation') {
              $request->file('image')->storeAs('public/renovation', $img);
          }
          if ($request['optradio'] === 'zinguerie') {
              $request->file('image')->storeAs('public/zinguerie', $img);
          }
          if ($request['optradio'] === 'slide') {
              $request->file('image')->storeAs('public/slide', $img);
          }

    		return redirect('/upload');
    	}


    	return 'The files is too big';
    }

    public function remove(request $request)
    {
      $img = str_replace('storage', 'public', $request->input('img'));

      Storage::delete($img);
      return redirect('/upload');
    }
}
