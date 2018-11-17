<?php

namespace App\Http\Controllers\Compra;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
//use App\Openpay;
use Validator;
use Auth;
use Redirect;
use \App\User;
use App\Articulos;
use App\Carrito; 
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
        if (auth()->user()->idCard!="") {
            $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
            $customer = $openpay->customers->get(auth()->user()->idCard); 
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
        $customer = $openpay->customers->get(auth()->user()->idCard); 

        $card = $customer->cards->get($request->cardId);
        return view('confirmarCompra.complementarTarjeta')->with(['card'=>$card,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);
    }

    public function confirmCompraView(Request $request)
    {
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
        $customer = $openpay->customers->get(auth()->user()->idCard);
        $card = $customer->cards->get($request->cardId);

        return view('confirmarCompra.confirmCompraView')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'card'=>$card,'security_code'=>$request->security_code,'customer'=>$customer]);
    }

    public function confirmCompra(Request $request)
    {  
        try{
            $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
            /*$customer = array(
             'name' => $_POST["name"],
             'last_name' => $_POST["last_name"],
             'phone_number' => $_POST["phone_number"],
             'email' => $_POST["email"],);

            $chargeData = array(
                'method' => 'card',
                'source_id' => "kiqjsl1qsjfogbw5bdap",
                'amount' => (float)$_POST["amount"],
                'description' => $_POST["description"],
                
                'device_session_id' => $_POST["deviceIdHiddenFieldName"],
                'customer' => $customer ); 
        $charge = $openpay->charges->create($chargeData);*/
                

        $customerId=auth()->user()->idCard; 

        $customer = $openpay->customers->get($customerId);

        $chargeData = array(
                'method' => 'card',
                'source_id' => $request->cardId,
                'amount' => (float)$_POST["amount"],
                'description' => $_POST["description"],
                
                'device_session_id' => $_POST["deviceIdHiddenFieldName"]);  
        echo "Cargo solicitado";


        if($customer->charges->create($chargeData)){
            echo("Success");
        }

        } catch (OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            echo "ERROR A | ".$e->getMessage() ;

        } catch (OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            echo "ERROR B";
            echo $e;

        } catch (OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            echo "ERROR C | ".$e->getMessage();

        } catch (OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            echo "ERROR D 'authentication'";
        } catch (OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            echo "ERROR E";
            
        } catch (Exception $e) {
            error_log('Error on the script: ' . $e->getMessage(), 0);
            echo "ERROR F";
        }
    }

    public function nuevaTarjetacre(Request $request)
    {
        
        return view('confirmarCompra.nuevaTarjetaCredito');
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



    public function guardarCard_custumer(Request $request)
    {  
        $openpayCore = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        if(auth()->user()->idCard==null){
            $customerData = array(
            'external_id' => null,
            'name' => $_POST['name'],
            'last_name' => $_POST['last_name'], 
            'email' => $_POST['email'],
            'phone_number' => $_POST['phone_number'],
            'clabe' => $_POST['card_number'], 
            'requires_account' => true); 
            $customer = $openpayCore->customers->add($customerData);
            User::where('_id', auth()->user()->id)->update(['idCard'=>$customer->id], ['upsert' => true]);
            return "Se agrego el Cliente";
        }else{
            //Agregar Tarjetas
            $cardDataRequest = array(
                'token_id' => $_POST['token_id'],
                'device_session_id' => $_POST['device_session_id']
                );

            $customer = $openpayCore->customers->get(auth()->user()->idCard);
            $card = $customer->cards->add($cardDataRequest);


            return "Se agrego la tarjeta".$card->id;
        }
        /*try {
            $res = $openpayCore->customers->get('aovhl9ks3lmt56t5bdyla');

            return $res->name;  
        } catch (\OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            return $e->getMessage();

        } catch (\OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            //Cliente no existe

             
 

        } catch (\OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } catch (\OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } catch (\OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } catch (\Exception $e) {
            error_log('Error on the script: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } */
    }

    public function confiCompra(Request $request)
    {
    	return view('confirmarCompra.confiCompra');
    }   
}