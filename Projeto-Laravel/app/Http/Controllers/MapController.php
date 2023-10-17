<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function consulta(Request $request){
        return response()->json(['mensagem' => 'Dados de resposta JSON']);
    }
}
