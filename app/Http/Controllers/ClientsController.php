<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClientsController extends Controller
{
    public function addClient(){
        return view('add-client');
    }

    public function saveClient(Request $request)
    {
      DB::table('clients')->insert([
          'Identifiant'=>$request->Identifiant,
          'Nom'=>$request->Nom,
          'Prenom'=>$request->Prenom,
          'Age'=>$request->Age,
          'Adresse'=>$request->Adresse,
          'Ville'=>$request->Ville,
          'Specialite'=>$request->Specialite

      ]);

      return back()->with('client_add', 'Client is added successfully');
    }

    public function ClientList(){
        $clients=DB::table('clients')->get();
        return view('liste-client',compact('clients'));
    }

    public function EditClient($id){
        $clients=DB::table('clients')->where('Identifiant',$id)->first();
        return view('edit-client',compact('clients'));
       }

     public function updateClient(Request $request){
        DB::table('clients')->where('Identifiant',$request->Identifiant)->update([
                'id'=>$request->Identifiant,
                'Nom'=>$request->Nom,
                'Prenom'=>$request->Prenom,
                'Age'=>$request->Age,
                'Adresse'=>$request->Adresse,
                'Ville'=>$request->Ville,
                'Specialite'=>$request->Specialite
        ]);
        return back()->with('client_update','Client is updated successfully');

        }
     public function DeleteClient($id){
           DB ::table('clients')->where('Identifiant',$id)->delete();
            return redirect('liste-client');
            /* $data=DB::table('clients')->find($id);
            $data=DB::table('clients')->delete();
            $data-> delete();
            return redirect('liste-client');

            $clients=DB::table('clients')->delete();
            return view('liste-client',compact('clients'));*/
            }

}
