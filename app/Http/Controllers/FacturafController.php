<?php

namespace Factura\Http\Controllers;
use Illuminate\Http\Request;

use Factura\Http\Requests;
use Factura\Emisor;
use Factura\Cliente;
use Factura\Producto;
use Factura\Facturaf;
use Factura\Http\Requests\FacturafRequest;
use Illuminate\Support\Facades\Redirect;
use DB;
use Kinedu\CfdiXML\CFDI;
use Kinedu\CfdiXML\XSLT;
use Kinedu\CfdiXslt\Retrive;

use Kinedu\CfdiXML\Node\Comprobante;
use Kinedu\CfdiXML\Common\Node;
use Kinedu\CfdiXML\Node\Receptor;
use XSLTProcessor;
use DOMDocument;


class FacturafController extends Controller
{
    public function index(){
        $emiss=Emisor::all();
        $ctess=Cliente::all();
        $prods=Producto::all();
       	return view('fact.index',compact('ctess','emiss','prods'));
   
      }
     public function store(){
       $serie = $_POST['Serie'];
       $Folio =$_POST['Folio'];
       $Fecha =$_POST['Fecha'];
       $emiso =$_POST['idEmpresa'];
       $clien =$_POST['selectcte'];
       $TipoDeComprobante =$_POST['TipoComprobante'];
       $Lugar =$_POST['LugarExpedicion'];
       $key = 'AAA010101AAA.key.pem';
       $cer = 'AAA010101AAA.cer.pem';

    	$cfdi = new CFDI([
            'Serie'=>$serie,
            'Folio' =>$Folio,
            'Fecha' =>$Fecha,
            'FormaPago' => '01',
            'NoCertificado' => '3000100000300023708',
            'SubTotal' => '4741.38',
            'Moneda' => 'MXN',
            'TipoCambio' => '1',
            'Total' => '5500.00',
            'TipoDeComprobante' =>$TipoDeComprobante,
            'MetodoPago' => 'PUE',
            'LugarExpedicion' => $Lugar,
    	], $key, $cer); 

        /*EMISOR
        $datosEmi=Emisor::find($emiso);
        $cfdi->add(new Emisor([
            'Rfc' => $datosEmi->RFCempresa,
            'Nombre' => $datosEmi->NomEmpresa ,
            'RegimenFiscal' => $datosEmi->idRegiFiscal ,
        ]));
         */
        $datosCte=Cliente::find($clien);
        $cfdi->add(new Receptor([
            'Rfc' => $datosCte->RFCliente,
            'Nombre' => $datosCte->NomCte,
            'ResidenciaFiscal' => $datosCte->idPais,
            'NumRegIdTrib' => $datosCte->NumRegIdTrib,
            'UsoCFDI' => 'G13',
        ]));
    	$cfdi->getXML();
    	$cfdi->save('./A0103.xml');

     }
}
