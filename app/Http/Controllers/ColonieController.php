<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Colonie;
use Auth;
class ColonieController extends Controller
{

     /**
     * Liste des colonies
     */
    public function list()
    {
  
       $userId = Auth::user()->id;
       return Colonie::where('id_user', '=',$userId)->firstOrFail();
    }   
    
    /***
     * Creer une nouvelle colonie
     */
    public function create(Request $request)
    {   
        $userId = Auth::user()->id;
        $request->merge(['id_user' => $userId]);
        return Colonie::create($request->all());
    }

    /**
     * Afficher une colonie
     */
    public function show($id)
    {
        $userId = Auth::user()->id;
        return Colonie::where('id_user', '=',$userId)
                ->where('id', '=', $id)
                ->firstOrFail();
    }

    /**
     * Mise à jour de la colonie
     */
    public function update(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $colonie = Colonie::find($id)
                 ->where('id_user', '=', $userId)
                 ->update($request->all());
       return $colonie;
    }

    /**
     * Supprime la colonie
     */
    public function delete(Request $request, $id)
    {   
        $userId = Auth::user()->id;
        $colonie = Colonie::find($id)
                  ->where('id_user', '=', $userId)
                  ->delete();
         return $colonie;
    } 


}
