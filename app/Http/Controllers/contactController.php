<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;


class contactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('nouv_contact');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'surname'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:contacts'],
            'jour'=>'required',
            'mois'=>'required',
            'annee'=>'required',
        ]);

        contacts::create([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
            "jour"=>$request->jour,
            "mois"=>$request->mois,
            "annee"=>$request->annee,
        ]);
        return back()->with("success", " : Contact crée ✅ !");;
    }
    public function liste() {
        $contacts = Contacts::orderBy("name","asc")->paginate(5);
        return view("liste_contacts", compact("contacts"));
    }

    public function edit(Contacts $contact) {

        return view("edit_contact", compact("contact"));
    }


    public function update(Request $request,Contacts $contact) {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'surname'=>['required', 'string', 'max:255'],
            'email'=>[ 'string', 'email', 'max:255', 'unique:contacts'],
            'jour'=>'required',
            'mois'=>'required',
            'annee'=>'required',
        ]);

        $contact->update([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
            "jour"=>$request->jour,
            "mois"=>$request->mois,
            "annee"=>$request->annee,
        ]);
        return back()->with("success", "Mise à jour éffectuée ✅ !");
    }

    public function delete(Contacts $contact){
        $nom_complet = $contact->name ." ". $contact->surname;
        $contact->delete();
        return back()->with("successDelete", "Suppression effectuée ✅ !");
    }


    public function indexAnnif(){
        $contacts = Contacts::all();
        $now=Carbon::now();
        $today=Carbon::today();
        return view('anniversaire', compact("contacts","now","today"));
    }
}
