<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

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


    public function send(Request $request) {
      //var_dump($request->input('InputName'), $request->input('InputTel'),$request->input('InputEmail'),$request->input('InputMessage') );exit;
      $name        = $request->input('InputName');
      $phoneNumber = $request->input('InputTel');
      $email       = $request->input('InputEmail');
      $msg         = $request->input('InputMessage');
      
        
      Mail::send('email.send', ['name' => $name, "phoneNumber" => $phoneNumber, 'email' => $email, 'msg' => $msg], function($message)
        {
            $message->from('contact@lelabobois.fr', 'Le Labo Bois');
            $message->to('contact@lelabobois.fr');
            $message->subject('Prise de contact Le Labo Bois');
        });
      return redirect('/');
    }
}
