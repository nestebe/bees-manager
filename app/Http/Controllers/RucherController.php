<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rucher;
use App\Ruche;
use Auth;
class RucherController extends Controller
{
    
 
 

     /**
     * Liste des ruchers
     */
    public function list()
    {
  
       $userId = Auth::user()->id;
       return Rucher::where('id_user', '=',$userId)->get();
    }   
    
    /***
     * Creer un nouveau rucher
     */
    public function create(Request $request)
    {   
        $userId = Auth::user()->id;
        $request->merge(['id_user' => $userId]);
        return Rucher::create($request->all());
    }

    /**
     * Afficher un rucher
     */
    public function show($id)
    {
        $userId = Auth::user()->id;
        return Rucher::where('id_user', '=',$userId)
                ->where('id', '=', $id)
                ->firstOrFail();
    }

    /**
     * Mise à jour du rucher 
     */
    public function update(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $rucher = Rucher::find($id)
                 ->where('id_user', '=', $userId)
                 ->update($request->all());
       return $rucher;
    }

    /**
     * Supprime le rucher
     */
    public function delete(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $rucher = Rucher::find($id)
                  ->where('id_user', '=', $userId)
                  ->delete();
         return $rucher;
    } 


}
