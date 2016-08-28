<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;

class MovieController extends Controller
{
    public function index()
    {
        $movies = DB::table('movies')->orderBy('position', 'asc')->get(); //Requête récupération des films en fonction de leurs position
        return view('welcome', ['movies' => $movies]);                    //Appel de la vue avec envoi des datas
    }

    public function upPosition(Request $request)
    {
        /*return response()->json($request->input('position'));*/

        $data = json_decode($request->input('position'));
        return $data; die();
        foreach ($data as $position => $id) {
            DB::table('movies')->where('id',$id)->update('position',$position);
        }
        return $data; die();
        return response()->json([
            'responseText' => $e->getMessage()
        ], 500);
    }
}
