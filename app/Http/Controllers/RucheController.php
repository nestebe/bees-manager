<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rucher;
use App\Ruche;
use Auth;
class RucheController extends Controller
{

     /**
     * Liste des ruches
     */
    public function list()
    {
  
       $userId = Auth::user()->id;
       return Ruche::where('id_user', '=',$userId)->firstOrFail();
    }   
    
    /***
     * Creer une nouvelle ruche
     */
    public function create(Request $request)
    {   
        $userId = Auth::user()->id;
        $request->merge(['id_user' => $userId]);
        return Ruche::create($request->all());
    }

    /**
     * Afficher une ruche
     */
    public function show($id)
    {
        $userId = Auth::user()->id;
        return Ruche::where('id_user', '=',$userId)
                ->where('id', '=', $id)
                ->firstOrFail();
    }

    /**
     * Mise à jour de la ruche
     */
    public function update(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $ruche = Ruche::find($id)
                 ->where('id_user', '=', $userId)
                 ->update($request->all());
       return $ruche;
    }

    /**
     * Supprime la ruche
     */
    public function delete(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $ruche = Ruche::find($id)
                  ->where('id_user', '=', $userId)
                  ->delete();
         return $rucher;
    } 


}
