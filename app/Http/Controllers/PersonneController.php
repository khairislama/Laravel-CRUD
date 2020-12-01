<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Personnes = Personne::latest()->paginate(5);

        return view('Personnes.index', compact('Personnes'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $Personne= new \App\Models\Personne();
        $Personne->nom=$req->input('nom');
        $Personne->prenom=$req->input('prenom');
        $Personne->age=$req->input('age');
        $Personne->save();

        return redirect()->action([PersonneController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personne $Personne)
    {
        return view('Personnes.show', compact('Personne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personne $Personne)
    {
        return view('Personnes.edit', compact('Personne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //$Personne= Personne::find($Personne);
        $Personne= Personne::find($req->input('idh'));
        $Personne->id=$req->input('idh');
        $Personne->nom=$req->input('nom');
        $Personne->prenom=$req->input('prenom');
        $Personne->age=$req->input('age');
        $Personne->save();

        return redirect()->action([PersonneController::class, 'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personne $Personne)
    {
        $Personne->delete();

        return redirect()->action([PersonneController::class, 'index']);
    }
}
