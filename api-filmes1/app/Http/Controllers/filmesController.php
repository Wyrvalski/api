<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class filmesController{
    public function index(){
        return Filme::all();
    }

    public function store(Request $request){

        return response()
            ->json(Filme::create($request->all()),
             201);
    }

    public function get(int $id){
        $filme = Filme::find($id);
        if(is_null($filme)){
            return response()->json('',204);
        }
        return response()->json($filme);
    }

    public function update(int $id,Request $request){
        $filme = Filme::find($id);
        if(is_null($filme)){
            return response()->json(['ERRO'=>'RECURSO NAO ENCONTRADO'],404);
        }
        $filme->fill($request->all());
        $filme->save();

        return $filme;
    }

    public function destroy(int $id){
        $qtdRecursos = Filme::destroy($id);

        if($qtdRecursos === 0){
            return response()->json(['ERRO'=>'RECURSO NAO ENCONTRADO'],404);
        }
        return response()->json('',204);
    }

}