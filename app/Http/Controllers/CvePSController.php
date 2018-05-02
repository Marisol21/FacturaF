<?php

namespace Factura\Http\Controllers;

use Illuminate\Http\Request;

use Factura\Http\Requests;
use Factura\CvePS;
use Factura\Http\Requests\CvepsRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class CvePSController extends Controller
{
    public function index(Request $request){

    	if ($request)
        {
            $query=trim($request->get('searchText'));
            $cves=DB::table('ProductoServicio')->where('Descripcion','LIKE','%'.$query.'%')
            ->orderBy('ClaveProdServ','desc')
            ->paginate(13);
            return view('cveps.index',["claves"=>$cves,"searchText"=>$query]);
        }
    }
}
