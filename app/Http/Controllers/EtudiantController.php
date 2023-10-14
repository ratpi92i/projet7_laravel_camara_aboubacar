<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
        public function liste_etudiant()
                {
                    $etudiants = Etudiant::paginate(4);
                    return view ('etudiant.liste',compact('etudiants'));
                }

        public function ajouter_etudiant()
              {
                return view('etudiant.ajouter');
              }

        public function ajouter_etudiant_traitement(Request $request)
        {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'classe' => 'required',
            ]);

            $etudiant = new Etudiant();
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->classe = $request->classe;
            $etudiant->save();
            return redirect('/ajouter')->with('status','L_etudiant a bien ete enregistre dans la base de donnes');
        }

        public function modifier_etudiant($id){
            $etudiants = Etudiant::find($id);
            return view('etudiant.modifier', compact('etudiants'));
        }

        public function modifier_etudiant_traitement(Request $request)
        {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'classe' => 'required',
            ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();

        return redirect('/etudiant')->with('status','L\'etudiant a bien été modifié avec succes');


        }

        public function supprimer_etudiant($id){
            $etudiant = Etudiant::find($id);
            $etudiant->delete();
            return redirect('/etudiant')->with('status','L\'etudiant a bien été supprimé');
        }


}
