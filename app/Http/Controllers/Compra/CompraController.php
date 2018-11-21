<?php

namespace App\Http\Controllers\Compra;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;   
use Validator;
use Auth;
use Redirect;
use \App\User;
use App\Articulos;
use App\Carrito; 
use App\Compras; 
use Intagono\Openpay\Openpay; 
use App\Direcciones; 

class Foo {

    /**
     * @var \Intagono\Openpay\Openpay
     */
    protected $openpay;

    /**
     * Constructor
     */
    public function __construct(Openpay $openpay)
    {
        $this->openpay = $openpay;
    }

}

class CompraController extends Controller
{
 
    
    public function metodoPago(Request $request)
    {   
        if (auth()->user()->idCustomer!=null) {
            
            $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 

            $customer = $openpay->customers->get(auth()->user()->idCustomer);   

            $findDataRequest = array( 
                'offset' => 0,
                'limit' => 5);

            $cardList = $customer->cards->getList($findDataRequest);

            return view('confirmarCompra.metodoPago')->with(['tarjetas'=>$cardList,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);    
        }else{
            return view('confirmarCompra.metodoPago')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]); 
        }
        
    }

    public function compTarjeta(Request $request)
    {
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        $customer = $openpay->customers->get(auth()->user()->idCustomer); 

        $card = $customer->cards->get($request->cardId);
        return view('confirmarCompra.complementarTarjeta')->with(['card'=>$card,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);
    }

    public function confirmCompraView(Request $request)
    {
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
        $customer = $openpay->customers->get(auth()->user()->idCustomer);
        $card = $customer->cards->get($request->cardId);

        return view('confirmarCompra.confirmCompraView')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'card'=>$card,'security_code'=>$request->security_code,'customer'=>$customer]);
    }

    public function confirmCompra(Request $request)
    {  
        try{ 
            $idPublicacion = Articulos::where(['idPublicacion'=>$request->idPaquete])->get();
            $vendedor = User::where(['_id'=>$idPublicacion[0]->idUser])->get(); 
            $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');

            $customerId=auth()->user()->idCustomer; 

            $customer = $openpay->customers->get($customerId);

            $chargeData = array(
                    'method' => 'card',
                    'source_id' => $request->cardId,
                    'amount' => (float)$_POST["amount"],
                    'description' => $_POST["description"],
                    
                    'device_session_id' => $_POST["deviceIdHiddenFieldName"]);   
            //Validación de cargo a tarjeta de credito
            if($customer->charges->create($chargeData)){
                //Transferencua a cuenta del vendedor
                $transferDataRequest = array(
                    'customer_id' => $vendedor[0]->idCustomer,
                    'amount' => 1.00,
                    'description' => 'Cobro de Comisión');
     
                $transfer = $customer->transfers->create($transferDataRequest); 

                $compras = new Compras;
                $compras->idUser = auth()->user()->_id;
                $compras->idPublicacion = $request->idPaquete;
                $compras->cantidad = 0;
                $compras->precio = $request->amount;
                $compras->save();
                return view('confirmarCompra.correcto')->with(['urlImagen'=>$request->urlImagen]);
            }

        } catch (\OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            
            if ($e->getErrorCode()==3003) {
                return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);
            }else{
                return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
            }

        } catch (\OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);

        } catch (\OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);

        } catch (\OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
            
        } catch (OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
            
        } catch (\Exception $e) {
            error_log('Error on the script: ' . $e->getMessage(), 0);
            echo "ERROR F | ".$e->getMessage(); 
            echo $e->getErrorCode();
        }
    }

    public function compraExitosa(Request $request)
    {
        return view('confirmarCompra.correcto');
    }

    public function nuevaTarjetacre(Request $request)
    {
        
        return view('confirmarCompra.nuevaTarjetaCredito')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);
    }

    public function dondeRecibir(Request $request)
    {
        if(Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->exists())
        {
         $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get(); 
    	 $urlImagen = $request->idUser."/".$request->idPublicacion; 
         return view('confirmarCompra.dondeRecibir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'domicilios'=>$domicilios,'urlImagen'=>$urlImagen,'idPaquete'=>$request->idPublicacion]);
         }else{
            
            $urlImagen = $request->idUser."/".$request->idPublicacion; 
            return view ('confirmarCompra.elegirFormaRecivir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$urlImagen,'idPaquete'=>$request->idPublicacion ]);
         } 
    }

    public function nuevoDomicilio(Request $request)
    {
           
            return view ('confirmarCompra.nuevoDomicilio')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion, 'idUser'=>$request->idUser ]);
         
    }

     public function agregarDomicilio(Request $request)
    {
    
       $id = Auth::id();
     
        $Direccion = new Direcciones;
        $Direccion->calle=$request->inputCalle1;
        $Direccion->contacto=null; 
        $Direccion->telefono=null;
        $Direccion->idUser=$id;
        $Direccion->numeroEx=$request->inputNumExt;
        $Direccion->numeroInt=$request->inputNumInt;
        $Direccion->entrecalles=$request->inputEntreCalles;
        $Direccion->referencia=$request->inputReferencias;
        $Direccion->codigopostal=$request->inputCodigoPostal;
        $Direccion->asentamiento=$request->inputAcentamiento;
        $Direccion->municipio=$request->inputMunicipio;
        $Direccion->estado=$request->inputEstado;
        $Direccion->envio=1;

        $Direccion->save();
       return view ('confirmarCompra.agregarcontactos')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion, 'idUser'=>$request->idUser ]);
       
    }


    public function aggTarjPrueba(Request $request)
    {
        return view('confirmarCompra.aggTarjPrueba');
    }  

    public function agregarContacto(Request $request)
    {
            $datos = Direcciones::where(['envio' => 1, 'idUser' => Auth::id()])->update([
    
                'contacto'  => $request->inputContacto,
                'telefono'  => $request->inputTelefono 

            ]);
            $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get(); 
             return view('confirmarCompra.dondeRecibir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'domicilios'=>$domicilios,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion]);
  
    }

    public function rechazar(Request $request)
    {
        return view('confirmarCompra.compraRechazada');

    }

    public function guardarCard_Customer(Request $request)
    {    
        try {
            $openpayCore = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        if(auth()->user()->idCustomer==null){ 
            $customerData = array(
            'external_id' => null,
            'name' => $_POST['name'],
            'last_name' => $_POST['last_name'], 
            'email' => $_POST['email'],
            'phone_number' => $_POST['phone_number'],
            'requires_account' => true);  
            
            $customer = $openpayCore->customers->add($customerData);
            $idCustomer=$customer->id;
            User::where('_id', auth()->user()->id)->update(['idCustomer'=>$idCustomer], ['upsert' => true]);
            User::where('_id', auth()->user()->id)->push('tarjetas', ['idCard'=>$customer->id,'card_number'=>$_POST['card_number']], true);
            

            $customer = $openpayCore->customers->get($idCustomer);

            $cardDataRequest = array(
                'holder_name' => $_POST['holder_name'],
                'card_number' => $_POST['card_number'],
                'cvv2' => $_POST['cvv2'],
                'expiration_month' => $_POST['expiration_month'],
                'expiration_year' => $_POST['expiration_year'],
                'device_session_id' => $_POST['device_session_id']
                );

            $card = $customer->cards->add($cardDataRequest);

            return "Se agrego el Cliente y su tarjeta->".$card->id;
            if (auth()->user()->idCustomer!=null) { 

                $customer = $openpayCore->customers->get(auth()->user()->idCustomer);   

                $findDataRequest = array( 
                    'offset' => 0,
                    'limit' => 5);

                $cardList = $customer->cards->getList($findDataRequest);

                return view('confirmarCompra.metodoPago')->with(['tarjetas'=>$cardList,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);    
            }else{
                return view('confirmarCompra.metodoPago')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]); 
            }
        }else{
            //Agregar Tarjetas
            $customer = $openpayCore->customers->get(auth()->user()->idCustomer);

            $cardDataRequest = array(
                'holder_name' => $_POST['holder_name'],
                'card_number' => $_POST['card_number'],
                'cvv2' => $_POST['cvv2'],
                'expiration_month' => $_POST['expiration_month'],
                'expiration_year' => $_POST['expiration_year'],
                'device_session_id' => $_POST['device_session_id']
                );

            $card = $customer->cards->add($cardDataRequest);
            User::where('_id', auth()->user()->id)->push('tarjetas', ['idCard'=>$customer->id,'card_number'=>$_POST['card_number']], true);
 
            return view('confirmarCompra.confirmCompraView')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'card'=>$card,'security_code'=>$request->security_code,'customer'=>$customer]);

        }
        } catch (\OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);

        } catch (\OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            //Cliente no existe
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);  
        } catch (\OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
        } catch (\OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
        } catch (\OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
        } catch (\Exception $e) {
            error_log('Error on the script: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'codigoError'=>$e->getErrorCode()]);
        } 
    }

    public function confiCompra(Request $request)
    {
    	return view('confirmarCompra.confiCompra');
    }
}