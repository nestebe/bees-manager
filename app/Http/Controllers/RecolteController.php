<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Recolte;
use Auth;
class InspectionController extends Controller
{

     /**
     * Liste des recoltes
     */
    public function list()
    {
  
       $userId = Auth::user()->id;
       return Recolte::where('id_user', '=',$userId)->firstOrFail();
    }   
    
    /***
     * Creer une nouvelle recolte
     */
    public function create(Request $request)
    {   
        $userId = Auth::user()->id;
        $request->merge(['id_user' => $userId]);
        return Recolte::create($request->all());
    }

    /**
     * Afficher une recolte
     */
    public function show($id)
    {
        $userId = Auth::user()->id;
        return  Recolte::where('id_user', '=',$userId)
                ->where('id', '=', $id)
                ->firstOrFail();
    }

    /**
     * Mise à jour de la recolte
     */
    public function update(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $recolte = Recolte::find($id)
                 ->where('id_user', '=', $userId)
                 ->update($request->all());
       return $recolte;
    }

    /**
     * Supprime la recolte
     */
    public function delete(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $recolte = Recolte::find($id)
                  ->where('id_user', '=', $userId)
                  ->delete();
         return $recolte;
    } 


}
