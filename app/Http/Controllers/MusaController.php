<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apprenant;

class MusaController extends Controller
{
    //$apprenant = new Apprenant();
    public function add(Request $request)
    {
        $newApprenant= new Apprenant();
        $newApprenant->nom = $request->nom;
        $newApprenant->age = $request->age;
        $newApprenant->save();
        return "L'apprenant a été persisté avec l'identifiant $newApprenant->id";

    }




    /*public function hello($prenom)
    {
    	return 'Hello '.$prenom;
    }*/

    public function hello(Request $request, $prenom)
    {
    	$nom = $request->query('nom');
    	$age = $request->input('age');

    	return "Hello $prenom $nom ! Are you $age old?";
    }

    public function index()
    {
    	return redirect()->route('hello',['prenom'=>'Redirected User']);
    }

    public $notes = [2,13,5,6,12,8,10,9];

    public function notes()
    {
        return view('notes',['notes'=>$this->notes]);
    }

    public $apprenants=[
        ['id'=>1, 'nom'=>'Musa Diagne', 'age'=> 23],
        ['id'=>2, 'nom'=>'Aissatu Seck', 'age'=> 21],

    ];

    public function updateForm($id){
        $apprenantToUpdate = Apprenant::find($id);
        return view('/update')->with('apprenantToUpdate',$apprenantToUpdate);
    }

    public function update(Request $request, $id){
        $apprenant = Apprenant::find($id);
        $apprenant['nom'] = $request->input('nom');
        $apprenant['age'] = $request->input('age');
        $apprenant->save();
        return "L'apprenant d'$id a maintenannt $apprenant->age ans";
    }
    public function destroy(Request $request, $id){
        $apprenant = Apprenant::destroy($id);
        return "L'apprenant $id a été supprimer";
    }
}
