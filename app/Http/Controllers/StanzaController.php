<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stanza;

class StanzaController extends Controller
{
    public function index(){

      $stanze  = Stanza::all();
      // dd($stanza);
      return view('stanza.stanze',compact('stanze'));
    }

    public function show($id){

      $stanzaInfo = Stanza::findOrFail($id);
      // dd($room);
      return view('stanza.stanza', compact('stanzaInfo'));
    }

    public function create(){
      // echo "ok"; die();
      return view('stanza.stanzaConf');
    }

    public function store(Request $request){
      $data= $request ->all();
      // dd($data);
      $request = Stanza::create($data);

      return redirect() -> route('stanze.index');
    }

}
