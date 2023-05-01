<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;
class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Club::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
      
        $this->validate($request,[
            'nom' => 'required',
            'image' => 'required',
            'Domaine' => 'required',
            'prix' => 'required',
            
    ]);
    
        // On crée un nouvel utilisateur
        $club = Club::create([
            'user_id' => 6,
            'nom' => $request->nom,
            'image' => $request->image,
            'Domaine' =>$request->Domaine,
            'prix' => $request->prix,
          
                 
        ]); 
    
        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json( $club, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $club=Club::findOrFail($id);
      return response()->json( $club, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'nom' => 'required',
        ]);
        $supplier = Club::findOrFail($id);

        $supplier->update($request->all());

       return response()->json(['success' => 'Club updated successfully'],200);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::findOrFail($id);
        $club->certifications()->delete();
        $club->evenements()->delete();
        $club->formations()->delete();
        $club->delete();
   
        return response()->json( ['Club Deleted Successfully.'],200);
      
    
    }
}
