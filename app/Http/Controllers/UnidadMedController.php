<?php

namespace Factura\Http\Controllers;

use Illuminate\Http\Request;

use Factura\Http\Requests;
use Factura\UnidadMed;
use Factura\Http\Requests\UnidadMedRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class UnidadMedController extends Controller
{
    public function index(Request $request){

    	if ($request)
        {
            $query=trim($request->get('searchText'));
            $unis=DB::table('UnidadM')->where('NomUM','LIKE','%'.$query.'%')
            ->orderBy('NomUM','desc')
            ->paginate(13);
            return view('unim.index',["unidades"=>$unis,"searchText"=>$query]);
        }
    }
}
