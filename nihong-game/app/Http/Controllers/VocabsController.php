<?php

namespace App\Http\Controllers;

use App\Models\Vocab;
use Illuminate\Http\Request;

class VocabsController extends Controller
{
    public function index(){
        
        return view('user.vocabs', [
            'vocabs' => Vocab::all()
        ]);
    }

    public function insert(){
        return view('user.insert');
    }

    public function store(Request $request){

        $store = new Vocab;
        $store->word = $request->input('word');
        $store->romaji = $request->input('romaji');
        $store->meaning = $request->input('meaning');
        $store->type = $request->input('type');
        $store->lesson = $request->input('lesson');
        $store->save();
        
        return response()->json(['status' => 'Success']);
    }
}
