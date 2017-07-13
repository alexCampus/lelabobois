<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class apiController extends Controller
{
    public function imgMenuiserie()
    {
		$images = [];
		$imgs = Storage::files('public/menuiserie');
		foreach ($imgs as $image) {
			$img = Storage::url($image);
			array_push($images, $img);
		}

		return $images;
	}

    public function imgCouverture()
    {
		$images = [];
		$imgs = Storage::files('public/couverture');
		foreach ($imgs as $image) {
			$img = Storage::url($image);
			array_push($images, $img);
		}

		return $images;
    }

    public function imgCharpente()
    {
    	$images = [];
		$imgs = Storage::files('public/charpente');
		foreach ($imgs as $image) {
			$img = Storage::url($image);
			array_push($images, $img);
		}

		return $images;
    }

    public function imgRenovation()
    {
        $images = [];
        $imgs = Storage::files('public/renovation');
        foreach ($imgs as $image) {
            $img = Storage::url($image);
            array_push($images, $img);
        }

        return $images;
    }

    public function imgZinguerie()
    {
        $images = [];
        $imgs = Storage::files('public/zinguerie');
        foreach ($imgs as $image) {
            $img = Storage::url($image);
            array_push($images, $img);
        }

        return $images;
    }

    public function imgConstruction()
    {
        $images = [];
        $imgs = Storage::files('public/constructionBois');
        foreach ($imgs as $image) {
            $img = Storage::url($image);
            array_push($images, $img);
        }

        return $images;
    }
}
