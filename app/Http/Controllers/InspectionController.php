<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Inspection;
use Auth;
class InspectionController extends Controller
{

     /**
     * Liste des inspections
     */
    public function list()
    {
  
       $userId = Auth::user()->id;
       return Inspection::where('id_user', '=',$userId)->firstOrFail();
    }   
    
    /***
     * Creer une nouvelle inspection
     */
    public function create(Request $request)
    {   
        $userId = Auth::user()->id;
        $request->merge(['id_user' => $userId]);
        return Inspection::create($request->all());
    }

    /**
     * Afficher une inspection
     */
    public function show($id)
    {
        $userId = Auth::user()->id;
        return Inspection::where('id_user', '=',$userId)
                ->where('id', '=', $id)
                ->firstOrFail();
    }

    /**
     * Mise à jour de l'inspection'
     */
    public function update(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $inspection = Inspection::find($id)
                 ->where('id_user', '=', $userId)
                 ->update($request->all());
       return $inspection;
    }

    /**
     * Supprime l'inspection
     */
    public function delete(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $inspection = Inspection::find($id)
                  ->where('id_user', '=', $userId)
                  ->delete();
         return $inspection;
    } 


}
