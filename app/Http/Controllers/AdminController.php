<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request){
        $texto=trim($request->get('texto'));
        $clientes=DB::table('clientes')
            ->select('idcliente', 'apellidos', 'nombre', 'documento', 'telefono', 'email', 'direccion')
            ->where('apellidos', 'LIKE', '%'.$texto.'%')
            ->orderBy('apellidos', 'asc')
            ->paginate(10);
        return view('admin.admin', compact('clientes', 'texto')) ;
    }
}