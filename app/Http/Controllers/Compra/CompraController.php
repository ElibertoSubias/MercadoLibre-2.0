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
    public function dondeRecibir(Request $request)
    {
        if ($request->idReferencia=="cardBuy") {
            //Se asigna un codigo de compra 
                $articulos = Carrito::where(['idUser'=>auth()->user()->_id])->get();
                $totalArticulosEnCarrito = count($articulos);
                if ($totalArticulosEnCarrito>0) {
                    $subTotal = 0;
                    foreach ($articulos as $articulo) {
                        $subTotal = $subTotal+$articulo->precio;
                    }
                    session_start();  
                    unset($_SESSION['codigoCompra']);  
                    $_SESSION["codigoCompra"]=date("YmdHis");  

                    if(Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->exists())
                    {
                        $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get();  
                        return view('confirmarCompra.dondeRecibir')->with(['cantidadArticulos'=>count($articulos),'precio'=>$subTotal,'domicilios'=>$domicilios,'idReferencia'=>'cardBuy']);     
                        
                    }else{
                        
                        $urlImagen = $request->idUser."/".$request->idPublicacion; 
                        return view ('confirmarCompra.elegirFormaRecivir')->with(['precio'=>$subTotal,'titulo'=>$request->titulo,'urlImagen'=>$urlImagen,'idPaquete'=>$request->idPublicacion,'cantidadArticulos'=>$request->cantidadArticulos]);
                    } 
                }else{
                    return Redirect::back()->withErrors(['No tienes articulos en el carrito']);
                }
                
        }else{
            $item = Articulos::where(['idPublicacion' => $request->idPublicacion])->get();
            if ($item[0]->cantidad > 0) {
                //Se asigna un codigo de compra 
                session_start();  
                unset($_SESSION['codigoCompra']);  
                $_SESSION["codigoCompra"]=mb_substr(auth()->user()->_id,-4).date("YmdHis");  

                if(Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->exists())
                {

                    $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get(); 
                    $urlImagen = $request->idUser."/".$request->idPublicacion; 

                    return view('confirmarCompra.dondeRecibir')->with(['cantidadArticulos'=>$request->cantidadArticulos,'precio'=>$request->precio,'titulo'=>$request->titulo,'domicilios'=>$domicilios,'urlImagen'=>$urlImagen,'idPaquete'=>$request->idPublicacion]); 
                }else{
                    
                    $urlImagen = $request->idUser."/".$request->idPublicacion; 
                    return view ('confirmarCompra.elegirFormaRecivir')->with(['cantidadArticulos'=>$request->cantidadArticulos,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$urlImagen,'idPaquete'=>$request->idPublicacion]);
                } 
            }else{
                return Redirect::back()->withErrors(['Articulo agotado']);
            }
        }
    }
    
    public function metodoPago(Request $request)
    {   
        if (auth()->user()->idCustomer!=null) {
            
            $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 

            $customer = $openpay->customers->get(auth()->user()->idCustomer);   

            $findDataRequest = array( 
                'offset' => 0,
                'limit' => 5);

            $cardList = $customer->cards->getList($findDataRequest);
            if (isset($request->idReferencia)) {
                return view('confirmarCompra.metodoPago')->with(['cantidadArticulos'=>$request->cantidadArticulos,'tarjetas'=>$cardList,'precio'=>$request->precio,'idReferencia'=>'cardBuy','costoEnvio'=>$request->costoEnvio]);   
            }else{
                return view('confirmarCompra.metodoPago')->with(['cantidadArticulos'=>$request->cantidadArticulos,'tarjetas'=>$cardList,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]);
            }   
        }else{
            if (isset($request->idReferencia)) {
                return view('confirmarCompra.metodoPago')->with(['cantidadArticulos'=>$request->cantidadArticulos,'tarjetas'=>$cardList,'precio'=>$request->precio,'idReferencia'=>'cardBuy','costoEnvio'=>$request->costoEnvio]);   
            }else{
                return view('confirmarCompra.metodoPago')->with(['cantidadArticulos'=>$request->cantidadArticulos,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio]); 
            }
        }
        
    }

    public function compTarjeta(Request $request)
    {
        $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get(); 
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        $customer = $openpay->customers->get(auth()->user()->idCustomer); 

        $card = $customer->cards->get($request->cardId);
        if (isset($request->idReferencia)) {
            return view('confirmarCompra.complementarTarjeta')->with(['cantidadArticulos'=>$request->cantidadArticulos,'idReferencia'=>$request->idReferencia,'card'=>$card,'precio'=>$request->precio,'costoEnvio'=>$request->costoEnvio,'direccion'=>$direccion]);
        }else{
            return view('confirmarCompra.complementarTarjeta')->with(['cantidadArticulos'=>$request->cantidadArticulos,'card'=>$card,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'direccion'=>$direccion]);
        }
    }

    public function confirmCompraView(Request $request)
    { 
        $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get(); 
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
        $customer = $openpay->customers->get(auth()->user()->idCustomer);
        $card = $customer->cards->get($request->cardId);

        if (isset($request->idReferencia)) {
            return view('confirmarCompra.confirmCompraView')->with(['cantidadArticulos'=>$request->cantidadArticulos,'idReferencia'=>$request->idReferencia,'card'=>$card,'precio'=>$request->precio,'costoEnvio'=>$request->costoEnvio,'security_code'=>$request->security_code,'customer'=>$customer,'domicilios'=>$domicilios]);
        }else{
            return view('confirmarCompra.confirmCompraView')->with(['cantidadArticulos'=>$request->cantidadArticulos,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'card'=>$card,'security_code'=>$request->security_code,'customer'=>$customer,'domicilios'=>$domicilios]);
        } 
    }

    private static function efectuarCompra($carItems,$customerId,$cardId,$description,$device_session_id,$idDireccionEnvio,$cantidad,$codigoCompra)
    {
            
            $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
            $contador=0;
            foreach ($carItems as $item) { 
                $publicacion = Articulos::where(['_id'=>$item->idPublicacion])->get();
                if ($publicacion[0]->cantidad > 0) { 
                    $vendedor = User::where(['_id'=>$publicacion[0]->idUser])->get(); 
                    
                    //echo '--comprador-'.$customerId.'--vendedor'.$vendedor[0]->idCustomer.'--Precio-'.$item->precio.'--cardId-'.$cardId.'</br>';

                    $customer = $openpay->customers->get($customerId); 

                    $chargeData = array(
                            'method'            => 'card',
                            'source_id'         => $cardId,
                            'amount'            => (float)($item->precio-$item->precio)+5,
                            'description'       => $description, 
                            'order_id' => $codigoCompra+$contador,
                            'device_session_id' => $device_session_id);

                    //Validación de cargo a tarjeta de credito
                    if($cargo = $customer->charges->create($chargeData)){
                        //Transferencia a cuenta del vendedor
                        $transferDataRequest = array(
                                'customer_id'       => $vendedor[0]->idCustomer,
                                'amount'            => (float)($item->precio-$item->precio)+5,
                                'description'       => 'Cobro de Mercancia');

                        $compras = new Compras;
                        $compras->idUser = auth()->user()->_id;
                        $compras->idPublicacion = $publicacion[0]->_id;
                        $compras->idVendedor = $publicacion[0]->idUser;
                        $compras->cardId = $cardId;
                        $compras->cargoId = $cargo->id;
                        $compras->cantidad = $item->cantidad;
                        $compras->codigoCompra = (string)($codigoCompra+$contador);
                        $compras->precio = floatval($item->precio);
                        $compras->idDireccionEnvio = $idDireccionEnvio;
                        $compras->save(); 

                        Articulos::where(['idPublicacion' => $item->idPaquete])->decrement('cantidad');
             
                        $transfer = $customer->transfers->create($transferDataRequest);
                        $contador++;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }
            return true;  
    }

    public function confirmCompra(Request $request)
    {   
        try{
            session_start(); 
            //Optener direcciones disponibles del comprador
            $direccionEnvio = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
            //Verificar si es compra de articulo o compra de carrito
            if (isset($request->idReferencia)) {
                ////////////////COMPRA CARRITO//////////////////
                //Optener los elementos en el carrido
                $carItems = Carrito::where(['idUser'=>auth()->user()->_id])->get();
                if(CompraController::efectuarCompra($carItems,auth()->user()->idCustomer,$request->cardId,'Compra carrito',$_POST["deviceIdHiddenFieldName"],$direccionEnvio[0]->_id,1,$_SESSION["codigoCompra"])){
                    Carrito::where(['idUser'=>auth()->user()->_id])->delete();
                    return redirect()->route('compraExitosa', ['idReferencia'=>$request->idReferencia,'codigoCompra'=>$_SESSION["codigoCompra"]]);
                }else{  
                    return redirect()->route('rechazada', ['precio'=>$request->precio,'idReferencia'=>$request->idReferencia,'costoEnvio'=>$request->costoEnvio,'msjError'=>'Agotado']);
                }

            }else{
                ////////////////COMPRA ARTICULO//////////////////
                $publicacion = Articulos::where(['idPublicacion'=>$request->idPaquete])->get();
                $vendedor = User::where(['_id'=>$publicacion[0]->idUser])->get(); 
                $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');

                $customerId=auth()->user()->idCustomer; 

                $customer = $openpay->customers->get($customerId); 

                $chargeData = array(
                        'method' => 'card',
                        'source_id' => $request->cardId,
                        'amount' => floatval($_POST["precio"]-$_POST["precio"]+1),
                        'description' => $_POST["description"],
                        'order_id' => $_SESSION["codigoCompra"],
                        'device_session_id' => $_POST["deviceIdHiddenFieldName"]);

                //Validación de cargo a tarjeta de credito
                if($cargo = $customer->charges->create($chargeData)){
                    //Transferencua a cuenta del vendedor
                    $transferDataRequest = array(
                        'customer_id' => $vendedor[0]->idCustomer,
                        'amount' => floatval($request->precio-$request->precio+1),
                        'description' => 'Cobro de Mercancia');
         
                    $transfer = $customer->transfers->create($transferDataRequest);

                    $compras = new Compras;
                    $compras->idUser = auth()->user()->_id;
                    $compras->idPublicacion = $publicacion[0]->_id;
                    $compras->idVendedor = $publicacion[0]->idUser;
                    $compras->cardId = $request->cardId;
                    $compras->cargoId = $cargo->id;
                    $compras->titulo = $_POST["description"];
                    $compras->cantidad = $request->cantidadArticulos;
                    $compras->codigoCompra = (string)$_SESSION["codigoCompra"];
                    $compras->precio = floatval($request->precio);
                    $compras->idDireccionEnvio = $direccionEnvio[0]->_id;
                    $compras->save(); 
                    $idCompra = $compras->getKey(); 

                    Articulos::where(['idPublicacion' => $request->idPaquete])->decrement('cantidad');
 
                    return redirect()->route('compraExitosa', ['urlImagen' => $request->urlImagen,'codigoCompra'=>$_SESSION["codigoCompra"]]);

                }else{
                    return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]); 
                }
            } 
        } catch (\OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            
            if ($e->getErrorCode()==3003) {
                return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia'=>$request->idReferencia]); 
            }else{
                return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia'=>$request->idReferencia]); 
            }

        } catch (\OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia'=>$request->idReferencia]); 

        } catch (\OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia'=>$request->idReferencia]); 

        } catch (\OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia'=>$request->idReferencia]); 
            
        } catch (OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia',$request->idReferencia]); 
            
        } catch (\Exception $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return redirect()->route('rechazada', ['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage(),'idReferencia',$request->idReferencia]); 
        }
    }

    public function compraExitosa(Request $request)
    { 
        return view('confirmarCompra.correcto')->with(['urlImagen' => $request->urlImagen,'codigoCompra'=>$request->codigoCompra]);
    }

    public function nuevaTarjetacre(Request $request)
    {
        
        return view('confirmarCompra.nuevaTarjetaCredito')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'cantidadArticulos'=>$request->cantidadArticulos]);
    } 

    public function nuevoDomicilio(Request $request)
    {
           
            return view ('confirmarCompra.nuevoDomicilio')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion, 'idUser'=>$request->idUser,'cantidadArticulos'=>$request->cantidadArticulos]);
         
    }

     public function agregarDomicilio(Request $request)
    {
        Direcciones::where(['envio' => 1, 'idUser' => Auth::id()])->update([
                'envio'  => 0,
            ]);
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
       return view ('confirmarCompra.agregarcontactos')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion, 'idUser'=>$request->idUser,'cantidadArticulos'=>$request->cantidadArticulos]);
       
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
             return view('confirmarCompra.dondeRecibir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'domicilios'=>$domicilios,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion,'cantidadArticulos'=>$request->cantidadArticulos]);
  
    }

    public function rechazar(Request $request)
    {  
        return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$request->msjError,'idReferencia'=>$request->idReferencia]);

    }

    public function guardarCard_Customer(Request $request)
    {    
        $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get();
        try {
            $openpayCore = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        //Valdiar el agregar una tarjeta
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

            //return "Se agrego el Cliente y su tarjeta->".$card->id;
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
 
            return view('confirmarCompra.confirmCompraView')->with(['cantidadArticulos'=>$request->cantidadArticulos,'precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'card'=>$card,'security_code'=>$request->security_code,'customer'=>$customer,'domicilios'=>$domicilios]);

        }
        } catch (\OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]);

        } catch (\OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            //Cliente no existe
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]);  
        } catch (\OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]);
        } catch (\OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]);
        } catch (\OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]);
        } catch (\Exception $e) {
            error_log('Error on the script: ' . $e->getMessage(), 0);
            return view('confirmarCompra.compraRechazada')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPaquete,'costoEnvio'=>$request->costoEnvio,'msjError'=>$e->getMessage()]);
        } 
    }

    public function confiCompra(Request $request)
    {
    	return view('confirmarCompra.confiCompra');
    } 

    public function histoCompra(Request $request)
    {

        $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        $compras = Compras::where('idUser' , '=', auth()->user()->id)->orderBy('created_at', 'desc')->get();
       
        $articulos= array();
        $direccionEnvio= array();
        $vendedor= array(); 
        foreach ($compras as $id) {
        
        $aux = Articulos::where('_id' , '=', $id->idPublicacion)->get(); 

        array_push($articulos, $aux);
        
        //echo $aux;
        $auxDirecion = Direcciones::where('_id' , '=', $id->idDireccionEnvio)->get();   
        array_push($direccionEnvio, $auxDirecion[0]);

        $auxVendedor = User::where('_id' , '=', $id->idVendedor)->get(); 
         array_push($vendedor, $auxVendedor[0]);  
        }   
          //  return $articulos;
    	return view('confirmarCompra.histoCompra', compact('direccion','compras', 'articulos', 'direccionEnvio', 'vendedor'));
    }

    public function vistaEstadoDeCuenta(Request $request)
    {
        return view('confirmarCompra.vistaEstadoDeCuenta');
    }
 
}