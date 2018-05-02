<?php

namespace Factura\Http\Controllers;

use Illuminate\Http\Request;
use Factura\Http\Requests;
use Factura\Producto;
use Factura\Http\Requests\ProductoRequest;
use Factura\Emisor;
use Factura\CvePS;
use Factura\UnidadMed;
use Illuminate\Support\Facades\Redirect;
use DB;

class ProductoController extends Controller
{
    public function index(){
    	$prods = Producto::orderBy('NomProd','ASC')->paginate();
    	return view('prod.index', compact('prods'));
    }
     
    public function create(){
        $prosers=CvePS::all();
        $unis=UnidadMed::all();
        $emiss=Emisor::all();
    	return view('prod.create', compact('prosers','unis','emiss'));
    }

    public function store(ProductoRequest $request){
    	$prods= new Producto;


        $prods->idProdServ = $request->idProdServ;
        $prods->NomProd = $request->NomProd;
        $prods->DescripcionProd = $request->DescripcionProd;
        $prods->idUM = $request->idUM;
        $prods->Precio = $request->Precio;
        $prods->idEmpresa = $request->idEmpresa;

        $prods->save();

        return redirect()->route('producto.index')->with('info','El Producto se creo correctamente');
    }

    public function edit($id){
        $prods=Producto::find($id);
        $prosers=CvePS::all();
        $unis=UnidadMed::all();
        $emiss=Emisor::find($prods->idEmpresa);
        return view('prod.edit', compact('prods','prosers','unis','emiss'));
    }

    public function update(ProductoRequest $request,  $id){
        $prods= Producto::find($id);


        $prods->idProdServ = $request->idProdServ;
        $prods->NomProd = $request->NomProd;
        $prods->DescripcionProd = $request->DescripcionProd;
        $prods->idUM = $request->idUM;
        $prods->Precio = $request->Precio;
        $prods->idEmpresa = $request->idEmpresa;

        $prods->save();

        return redirect()->route('producto.index')->with('info','El Producto se actualizo correctamente');
    }

    public function show($id){
    	$prods = Producto::find($id);
        $cvess = CvePS::find($prods->idProdServ);
        $uniss = UnidadMed::find($prods->idUM);
    	return view('prod.show', compact('prods','cvess','uniss'));
    }

    public function destroy($id){
    	$produ=Producto::find($id);
    	$produ->delete();

    	return back()->with('info', 'El PRODUCTO fue eliminado');
    }
}
