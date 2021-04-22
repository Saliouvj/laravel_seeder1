<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
   
    
    public function store(Request $request)
    {
        $store = new Membre;
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->mail= $request->mail;
        $store->telephone=$request->telephone;
        $store->save();
        return redirect()->back();
    }

    
    public function show($id)
    {
        $show=Membre::find($id);
        return view('show',compact('show'));
    }

    
    public function edit($id)
    {
        $edit=Membre::find($id);
        return view('edit', compact('edit'));
    }

    
    public function update(Request $request, $id)
    {
        $update=Membre::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->mail = $request->mail;
        $update->telephone = $request->telephone;
    }

    
    public function destroy($id)
    {
        $destroy=Membre::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
