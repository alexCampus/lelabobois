<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function index() {

    	$images = [];
    	$imgs = Storage::allFiles('public/slide');
    	foreach ($imgs as $image) {
         	$img = Storage::url($image);
         	array_push($images, $img);
      	}
    	return view('home', ['images' => $images]);
    }

    public function send(Request $request) {
      
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
      \Session::flash('flash_message', utf8_encode('Votre message a bien été envoyé. Nous vous répondrons dans les plus bref délais.'));
      return redirect('/#contact');
    }
}
