<?php

namespace App\Http\Controllers;

use App\Commune;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communes = Commune::orderBy('created_at','desc')->get();
        return view('commune.index',compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commune.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commune = new Commune;
        $commune->name = $request->name;
        $commune->slug = Str::slug($request->name);
        $commune->save();
        return redirect()->back()->with('status','Commune Créer Avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Commune $commune)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commune = Commune::findOrFail(decrypt($id));
        return view('commune.edit',compact('commune'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $commune = Commune::findOrFail($id);
        $commune->name = $request->name;
        $commune->save();
        return redirect()->route('commune.index')->with('status','Commune modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Commune::destroy($id)){

        }else{

        }
        return redirect()->back()->with('status','Commune supprimé avec succès!');
    }
}
