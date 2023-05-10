<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    //
    public function lister(){ 
        $etudiants = Etudiant::paginate(3);
        return view("etudiant.lister",compact('etudiants'));
    }

    public function ajouter(){
        return view("etudiant.ajouter");
    }

    public function modifier($id){
        $etudiant = Etudiant::find($id);
        return view("etudiant.modifier",compact('etudiant'));
    }

    public function rechercher(Request $request){
        $etudiants = Etudiant::where('code',$request->code)->first();
        return view("etudiant.lister",compact('etudiants'));
    }

    public function modifier_traitement(Request $request){
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'niveau' => 'required',
            'filiere' => 'required',
        ]);
        var_dump($request->id);
        $etudiant = Etudiant::find($request->id);
        $etudiant->code = $request->code;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->niveau = $request->niveau;
        $etudiant->filiere = $request->filiere;
        $etudiant->save();
        return redirect('/')->with('status','Etudiant(e) modifié(e) avec succes ! ');
    }

    public function ajouter_traitement(Request $request){
        $data = $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'niveau' => 'required',
            'filiere' => 'required',
        ]);
        
        Etudiant::create($data);
        
        return redirect('/')->with('status','Etudiant ajouté(e) avec succes ! ');
    }

    public function supprimer($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/')->with('status','Etudiant supprimé(e) avec succes ! ');
    }
    
    
}
