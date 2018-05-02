<?php

namespace Factura\Http\Controllers;

use Illuminate\Http\Request;
use Factura\Cliente;

use Factura\Http\Requests;
use Factura\Emisor;
use Factura\Pais;
use Factura\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ClienteController extends Controller
{
	
    public function index(){
    	$ctes = Cliente::orderBy('RFCliente','ASC')->paginate();
    	return view('cte.index', compact('ctes'));
    }

    public function create(){
        $paises=Pais::all();
        $emisoo=Emisor::all();
        return view('cte.create', compact('paises','emisoo'));
    }

    public function store(ClienteRequest $request){
       $ctee=new Cliente;

       $ctee->RFCliente = $request->RFCliente;
       $ctee->NomCte = $request->NomCte;
       $ctee->CorreoCte = $request->CorreoCte;
       $ctee->CP = $request->CP;
       $ctee->idPais = $request->idPais;
       $ctee->NumRegIdTrib = $request->NumRegIdTrib;
       $ctee->idEmpresa = $request->idEmpresa;

       $ctee->save();

       return redirect()->route('cliente.index')->with('info','El Cliente fue creado');
    }

    public function edit($id){
        $ctes = Cliente::find($id);
        $paises=Pais::all();
        $emisoo=Emisor::find($ctes->idEmpresa);
        return view('cte.edit', compact('ctes','paises','emisoo'));
    }

    public function update(ClienteRequest $request,  $id){
        
       $ctee=Cliente::find($id);

       $ctee->RFCliente = $request->RFCliente;
       $ctee->NomCte = $request->NomCte;
       $ctee->CorreoCte = $request->CorreoCte;
       $ctee->CP = $request->CP;
       $ctee->idPais = $request->idPais;
       $ctee->NumRegIdTrib = $request->NumRegIdTrib;
       $ctee->idEmpresa = $request->idEmpresa;

       $ctee->save();

       return redirect()->route('cliente.index')->with('info','El Cliente fue actualizado');
    }

    public function show($id){
    	$ctes = Cliente::find($id);
        $paiss = Pais::find($ctes->idPais);
        $ctess = Emisor::find($ctes->idEmpresa);
    	return view('cte.show', compact('ctes','paiss','ctess'));
    }

    public function destroy($id){
    	$clie=Cliente::find($id);
    	$clie->delete();

    	return back()->with('info', 'Cliente eliminado');
    }

}
