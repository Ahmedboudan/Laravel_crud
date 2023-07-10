<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    //
    public function lister_filiere()
    {
        $filieres = Filiere::paginate(3);
        return view('filiere.lister_filiere', compact('filieres'));
    }
    public function ajouter_filiere()
    {
        return view('filiere.ajouter');
    }
    public function ajouter_filiere_traitement(Request $request)
    {
        $data = $request->validate([
            'code_f' => 'required',
            'designation' => 'required',
        ]);
        Filiere::create($data);
        return redirect('/lister_filiere')->with('status', 'Filiere ajouté(e) avec succès!');

    }
    public function supprimer_filiere($id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect('/lister_filiere')->with('status', 'Filière supprimée avec succes ! ');
    }

    public function modifier_filiere($id){
        $filiere = Filiere::find($id);
        return view("filiere.modifier_filiere", compact('filiere'));
    }
    public function modifier_filiere_traitement(Request $request)
    {
        $request->validate([
            'code_f' => 'required',
            'designation' => 'required',
        ]);
        $filiere = Filiere::find($request->id);
        $filiere->code_f = $request->code_f;
        $filiere->designation = $request->designation;
        $filiere->save();
        return redirect('/lister_filiere')->with('status', 'Filière modifiée avec succes ! ');
    }

}
