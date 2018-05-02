<?php

namespace Factura\Http\Controllers;

use Illuminate\Http\Request;

use Factura\Http\Requests;
use Factura\Emisor;
use Factura\Regimen;
use Factura\Pais;
use Factura\Http\Requests\EmisorRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class EmisorController extends Controller
{
    public function index(){
    	$emis = Emisor::orderBy('RFCempresa','ASC')->paginate();
    	return view('emi.index', compact('emis'));
    }
    public function create(){
        $regimens=Regimen::all();
        $paises=Pais::all();
        return view('emi.create',compact('regimens','paises'));
    }

    public function store(EmisorRequest $request){
        $emiso = new Emisor;
          
        $emiso->RFCempresa = $request->RFCempresa;
        $emiso->NomEmpresa = $request->NomEmpresa;
        $emiso->idRegiFiscal = $request->idRegiFiscal;
        $emiso->CP = $request->CP;
        $emiso->idPais = $request->idPais;

        $emiso->save();

        return redirect()->route('emisor.index')->with('info','El emisor fue creado');
    }

    public function edit($id){
        $regimens=Regimen::all();
        $paises=Pais::all();
        $emiso = Emisor::find($id);
        return view('emi.edit', compact('emiso','regimens','paises'));
    }

    public function update(EmisorRequest $request, $id){
        $emiso = Emisor::find($id);
          
        $emiso->RFCempresa = $request->RFCempresa;
        $emiso->NomEmpresa = $request->NomEmpresa;
        $emiso->idRegiFiscal = $request->idRegiFiscal;
        $emiso->CP = $request->CP;
        $emiso->idPais = $request->idPais;

        $emiso->save();

        return redirect()->route('emisor.index')->with('info','El emisor fue actualizado');
    }

    public function show($id){
    	$emis = Emisor::find($id);
        $paiss = Pais::find($emis->idPais);
        $regimenes = Regimen::find($emis->idRegiFiscal);
    	return view('emi.show', compact('emis','paiss','regimenes'));
    }
    public function destroy($id){
    	$empre=Emisor::find($id);
    	$empre->delete();

    	return back()->with('info', 'El Emisor fue eliminado');
    }
}
