<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;

use App\Models\Offre;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offres.ajouteOffre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        $imagePath = $request->file('image')->storeAs(
            'offres', time() . '_' . $request->file('image')->getClientOriginalName(), 'images'
        );

        $offre = new Offre();
        $offre->type = $request->type;
        $offre->categorie = $request->categorie;
        $offre->offre = $request->offre;
        $offre->image_offre = $imagePath;
        $offre->prix = $request->prix;
        $offre->id_user = $request->id_user;
        $offre->save();
        if($request->type=='service'){
            return redirect()->route('home.services');
        }elseif($request->type=='demande'){
            return redirect()->route('home.demandes');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offre = Offre::findorFail($id);
        return view('offres.modification_offre',compact('offre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offre = Offre::findorFail($id);
        $offre->type = $request->type;
        $offre->categorie = $request->categorie;
        $offre->offre = $request->offre;
        if($request->file('image') != null){
            $imagePath = $request->file('image')->storeAs(
                'offres', time() . '_' . $request->file('image')->getClientOriginalName(), 'images'
            );
            $offre->image_offre = $imagePath;
        }
        $offre->prix = $request->prix;
        $offre->id_user = $request->id_user;
        $offre->save();
        if($request->type=='service'){
            return redirect()->route('home.vosservices');
        }elseif($request->type=='demande'){
            return redirect()->route('home.vosdemandes');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offre = Offre::findorFail($id);
        $offre->delete();
        return redirect()->back();
    }
    
    public function reponses(){
        return view('offres.reponse');
    }

    public function services(){
        $services = Offre::where('type','service')->get();
        foreach ($services as $srv) {
            $user = User::where('id', $srv->id_user)->first();
            $srv->nom = $user->nom;
            $srv->prenom = $user->prenom;
            $srv->image = $user->image;
        }
        return view('offres.services',compact('services'));
    }

    public function demandes(){
        $demandes = Offre::where('type','demande')->get();
        foreach ($demandes as $d) {
            $user = User::where('id', $d->id_user)->first();
            $d->nom = $user->nom;
            $d->prenom = $user->prenom;
            $d->image = $user->image;
        }
        return view('offres.demandes',compact('demandes'));
    }

    public function services_id(){
        $services = Offre::all()->where('type','service')->where('id_user', Auth::user()->id);
        foreach ($services as $srv) {
            $user = User::where('id', $srv->id_user)->first();
            $srv->nom = $user->nom;
            $srv->prenom = $user->prenom;
            $srv->image = $user->image;
        }
        return view('offres.vosservice',compact('services'));
    }

    public function demandes_id(){
        $demandes = Offre::all()->where('type','demande')->where('id_user', Auth::user()->id);
        foreach ($demandes as $d) {
            $user = User::where('id', $d->id_user)->first();
            $d->nom = $user->nom;
            $d->prenom = $user->prenom;
            $d->image = $user->image;
        }
        return view('offres.vosdemandes',compact('demandes'));
    }

    public function repondres($id){

    }
    public function search(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $adresse = $request->input('adresse');

        $query = Offre::query();

        if ($nom) {
            $query->where('nom', 'LIKE', "%$nom%");
        }
        if ($prenom) {
            $query->where('prenom', 'LIKE', "%$prenom%");
        }
        if ($email) {
            $query->where('email', 'LIKE', "%$email%");
        }
        if ($adresse) {
            $query->where('adresse', 'LIKE', "%$adresse%");
        }

        $users = $query->get();
        return view('admin.user', compact('users'));

    }
}
