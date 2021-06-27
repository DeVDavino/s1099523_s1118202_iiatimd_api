<?php

namespace App\Http\Controllers;

use \App\Models\Ideen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class IdeenController extends Controller
{
    public function create(Request $request){
        $user_id = Auth::user()->id;

        return Ideen::create([
            'titel' => $request->input('titel'),
            'description' => $request->input('description'),
            'categorie' => $request->input('categorie'),
            'user_id' => $user_id,
        ]);
    }

    public function index(){
        $user_id = Auth::user()->id;
        $ideen = DB::table('ideen')->where('user_id', '=', $user_id)->get();
        return $ideen;
    }
    
}