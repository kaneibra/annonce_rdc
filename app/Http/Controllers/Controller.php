<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Category;
use App\Commune;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function ads(){
        $annonces = Annonce::orderby('created_at','desc')->take(5)->get();
        $cats = Category::all();
        $coms = Commune::all();

        return view('footer',compact('annonces','cats','coms'));
    }
}
