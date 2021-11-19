<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }
    public function info()
    {
        Paginator::useBootstrap();
        $formulaires = Formulaire::orderBy('created_at', 'DESC')->paginate(6);
        return view('info',compact('formulaires'));
    }
    public function editForm($id)
    {
        $formulaire = Formulaire::findOrFail($id);
        return view('edit',compact('formulaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'password'=>'required|min:8',
        ]);
        // dd($request->all());
        $formulaire = new Formulaire(); 
        $formulaire->nom = $request->nom;
        $formulaire->prenom = $request->prenom;
        $formulaire->email = $request->email;
        $formulaire->password = Hash::make($request->password);
        $formulaire->save();

        session()->flash('success', 'Formulaire crée avec succés');
        return redirect()->route('formulaire');
    }    
  
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
             
        ]);
         
        Formulaire::find($id)->update([
            'nom'=>$request->nom,
            'prenom' => $request->prenom,
            'email'=> $request->email,
         ]);
         
         session()->flash('success', 'modifier  avec succés');
        return redirect()->route('formulaire.afficher');
    }

    public function destroy($id)
    {
        $formulaire = Formulaire::find($id);
        $formulaire->delete();
        session()->flash('danger', 'supprimer avec succés');
        return redirect()->route('formulaire.afficher');
    }
}
