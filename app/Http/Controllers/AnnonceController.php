<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Category;
use App\Commune;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();
        $categories = Category::all();
        $communes = Commune::all();
        return view('ads.index',compact('annonces','categories','communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $communes = Commune::all();
        return view('ads.create',compact('categories','communes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annonce = new Annonce;
        $annonce->title = $request->title;
        $annonce->slug = Str::slug($request->title);
        $annonce->category_id = $request->category_id;
        $annonce->commune_id = $request->commune_id;
        $annonce->user_id = Auth::id();
        $annonce->price = $request->price;
        $annonce->description = $request->description;
        $annonce->condition_product = $request->condition_product;
        $annonce->active = 1;
        
        if($request->hasFile('image')){

            foreach($request->file('image') as $photo){
                $extension = $photo->getClientOriginalExtension();
            $fillName = time().'.'.$extension;
            $photo->move('uploads/ads/',$fillName);
                $data[] = $fillName; 
            }
        }
        $annonce->image = json_encode($data);
        // dd($annonce);
        $annonce->save();
        return redirect()->back()->with('status','Annonce Posté avec succès!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        $communes = Commune::all();
        $categories = Category::all();
        return view('ads.show',compact('annonce','communes','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = Annonce::findOrFail(decrypt($id));
        $categories = Category::all();
        $communes = Commune::all();
        return view('ads.edit',compact('annonce','categories','communes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->title = $request->title;
        $annonce->category_id = $request->category_id;
        $annonce->commune_id = $request->commune_id;
        $annonce->user_id = Auth::id();
        $annonce->price = $request->price;
        $annonce->description = $request->description;
        $annonce->condition_product = $request->condition_product;
        $annonce->active = 1;
        
        if($request->hasFile('image')){

            foreach($request->file('image') as $photo){
                $extension = $photo->getClientOriginalExtension();
            $fillName = time().'.'.$extension;
            $photo->move('uploads/ads/',$fillName);
                $data[] = $fillName; 
            }
        }
        $annonce->image = json_encode($data);
        // dd($annonce);
        $annonce->save();
        return redirect()->back()->with('status','Annonce modifié avec succès!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
