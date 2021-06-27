<?php

namespace App\Http\Controllers;

use \App\Models\Ideen;
use Illuminate\Http\Request;
use DB;

class IdeenController extends Controller
{
    public function create(Request $request){
        return Ideen::create([
            'titel' => $request->input('titel'),
            'description' => $request->input('description'),
            'categorie' => $request->input('categorie'),
            'user_id' => $request->input('user_id'),
        ]);
    }

    public function index(){
        //1 is temp moet veranderd worden naar de ingelogde gebruiker
        $user_id = 1;
        $ideen = DB::table('ideen')->where('user_id', '=', $user_id)->get();
        return $ideen;
    }
    
}