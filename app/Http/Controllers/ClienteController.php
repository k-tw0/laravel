<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $texto=trim($request->get('texto'));
        $clientes=DB::table('clientes')
            ->select('idcliente', 'apellidos', 'nombre', 'documento', 'telefono', 'email', 'direccion')
            ->where('apellidos', 'LIKE', '%'.$texto.'%')
            ->orderBy('apellidos', 'asc')
            ->paginate(10);
        return view('admin.admin', compact('clientes', 'texto')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente; // se obtiene la tabla
        $cliente->apellidos=$request->input('apellidos'); 
        $cliente->nombre=$request->input('nombre');
        $cliente->documento=$request->input('documento');
        $cliente->telefono=$request->input('telefono');
        $cliente->direccion=$request->input('direccion');
        $cliente->email=$request->input('email');
        $cliente->save(); //metodo para guardar
        return redirect()->route('admin.index'); //re direcciona a la pagina principal del administrador
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('admin.edit', compact('cliente'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //
         $cliente=Cliente::findOrFail($id);
         $cliente->apellidos=$request->input('apellidos'); 
         $cliente->nombre=$request->input('nombre'); 
         $cliente->documento=$request->input('documento'); 
         $cliente->direccion=$request->input('direccion'); 
         $cliente->telefono=$request->input('telefono'); 
         $cliente->email=$request->input('email'); 
         $cliente->save();
         return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}