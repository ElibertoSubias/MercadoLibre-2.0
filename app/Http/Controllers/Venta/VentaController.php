<?php

namespace App\Http\Controllers\Venta;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\User;
use App\Articulos;
use App\Carrito;
use App\Direcciones;
use App\Compras;
use App\Usuarios;
use App\Urlimagenes;
use App\Comentarios;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verMensajes(Request $request)
    {
        if ($request->ajax()) { 
            $datosCompra = Compras::where(['_id'=>$request->idCompra])->where( function ( $query )
            {
                $query->where( 'idVendedor', '=', auth()->user()->_id )
                    ->orWhere( 'idUser', '=', auth()->user()->_id );
            })->get(); 
            $datosComprador = User::where(['_id'=>$datosCompra[0]->idUser])->get(); 
            $datosArticulo = Articulos::where(['_id'=>$datosCompra[0]->idPublicacion])->get();
            $vendedor = User::where(['_id'=>$datosCompra[0]->idVendedor])->get();  
            
                setlocale(LC_ALL,"es_ES");  
                $fechaCompra = $datosCompra[0]->created_at;
                $newDate = date("d-m-Y", strtotime($fechaCompra));  

                if(isset($datosCompra[0]->mensajes)){
                    $aux="";
                    $arrayMensajes = array();
                    foreach ($datosCompra[0]->mensajes as $msj) { 
                        
                        if($msj['idEmisor']==auth()->user()->_id){
                            $aux= "<div>";
                                    //Incrementando 2 dias
                                    $mod_date = strtotime($msj['created_at']); 
                                    $dia = date("d",$mod_date); 
                                    $mes = strftime("%B");
                                    $tiempo = date("H:i",strtotime($msj['created_at']));   

                                 if(isset($anterior)){
                                    if($newDate==$anterior){}
                                    else{
                                        $aux = $aux . "<div class='message-date'>".$dia." de ".$mes."</div>";
                                    }
                                 }else{
                                    $aux = $aux . "<div class='message-date'>".$dia." de ".$mes."</div>";
                                 } 

                                $anterior = $newDate;

                            $aux = $aux . '<div class="message-line"><div class="message-line__message">
                                    <div class="message-line__message-box message-line__message--sender">
                                        <strong class="title"></strong>
                                        <div class="text">'.$msj['cuerpoMsj'].'</div>
                                        <div class="time">
                                            <span class="time__tick time__tick--read">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 24 14">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path fill="#3483FA" fill-rule="nonzero" d="M18.188 1.453L11.625 7.97l-1.453-1.453L16.734 0l1.453 1.453h.001zM22.547 0L24 1.453 11.625 13.781 5.906 8.016l1.407-1.454 4.312 4.266L22.547 0zM0 8.016l1.5-1.454 5.719 5.766-1.453 1.453L0 8.016z" opacity=".805"></path>
                                                        <path d="M0-6h24v24H0z"></path>
                                                    </g>
                                                </svg>
                                                </span>
                                                <span class="time__timestamp">'.$tiempo.'</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            $aux = $aux .  "</div>";
                        }else{
                            $aux="";
                            $aux = $aux . "<div>";
                                //Incrementando 2 dias
                                $mod_date = strtotime($msj['created_at']); 
                                $dia = date("d",$mod_date); 
                                $mes = strftime("%B");
                                $tiempo = date("H:i",strtotime($msj['created_at']));   
                                if(isset($anterior)){
                                    if($newDate==$anterior){}
                                    else{
                                        $aux = $aux .  "<div class='message-date'>".$dia." de ".$mes."</div>";
                                    }
                                }else{
                                    $aux = $aux .  "<div class='message-date'>".$dia." de ".$mes."</div>";
                                } 
                                $anterior = $newDate;
                            $aux = $aux . '<div class="message-line">
                                    <div class="message-line__message">
                                        <div class="message-line__message-box message-line__message--receiver message-line__message--orders">';
                                            if($vendedor[0]->_id==auth()->user()->_id){
                                                $aux = $aux .  '<strong class="name">'.$msj['nomVendedor'].'</strong>';
                                            }
                                            else{
                                                $aux = $aux .  '<strong class="name">'.$msj['nomVendedor'].'</strong>';
                                            }
                                             
                                        $aux = $aux .  '<strong class="title"></strong>
                                            <div class="text">'.$msj['cuerpoMsj'].'</div>
                                            <div class="time">
                                                <span class="time__timestamp">'.$tiempo.'</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }  
                        array_push($arrayMensajes,$aux);
                    }  
                    return $arrayMensajes;
                }  
        }else{
            $datosCompra = Compras::where(['_id'=>$request->idCompra])->where( function ( $query )
            {
                $query->where( 'idVendedor', '=', auth()->user()->_id )
                    ->orWhere( 'idUser', '=', auth()->user()->_id );
            })->get();
            $datosComprador = User::where(['_id'=>$datosCompra[0]->idUser])->get(); 
            $datosArticulo = Articulos::where(['_id'=>$datosCompra[0]->idPublicacion])->get();
            $vendedor = User::where(['_id'=>$datosCompra[0]->idVendedor])->get(); 
            return view('vender.mensajes.create')->with(['nomComprador'=>$datosComprador[0]->nombre.' '.$datosComprador[0]->apellido,'datosArticulo'=>$datosArticulo[0],'datosCompra'=>$datosCompra[0],'datosVendedor'=>$vendedor[0],'msjs'=>$datosCompra[0]->mensajes]);
        }
    }

    public function addMensaje(Request $request)
    {
        $datosCompra = Compras::where(['_id'=>$request->idCompra])->where( function ( $query )
        {
            $query->where( 'idVendedor', '=', auth()->user()->_id )
                ->orWhere( 'idUser', '=', auth()->user()->_id );
        })->get();

        $vendedor = User::where(['_id'=>$datosCompra[0]->idVendedor])->get(); 

        $dateNow = date("Y-m-d\TH:i:s\Z");  
        //$date = new \MongoDB\BSON\UTCDateTime(new DateTime("2017-03-31"); 
        if ($request->msjCuerpo!="") { 
            Compras::where('_id', $request->idCompra)->push('mensajes', [ 
                'nomVendedor'=>$vendedor[0]->nombre,
                'idEmisor'=>auth()->user()->_id,
                'cuerpoMsj'=>$request->msjCuerpo,
                'estadoMsj'=>0,
                'created_at'=>$dateNow],
                true
            );
            return Redirect::route('verMensajes',['idCompra' => $request->idCompra]);
        }else{
            return Redirect::back()->withErrors(['Campo de comentario requerido']);
        } 
    }

    public function historialVentas(Request $request)
    {
        $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        $compras = Compras::where('idVendedor' , '=', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        $nombresCompradores = array();
        foreach ($compras as $key) {
            $comprador = User::where(['_id'=>$key->idUser])->get(); 
            array_push($nombresCompradores,$comprador[0]->nombre);
        } 
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
        return view('ventas.create', compact('direccion','compras', 'articulos', 'direccionEnvio', 'vendedor','nombresCompradores'));
    }

    public function showPrecio(Request $request)
    {
        return view('vender.precio')->with('objectArticulo',$request);
    }

    public function showPrecioPROD(Request $request)
    {
        return view('vender.precioPROD')->with('objectArticulo',$request);
    }
    
    public function showConfirmar(Request $request)
    {
        return view('vender.confirmar')->with('objectArticulo',$request);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        session_start();
        unset($_SESSION['idPublicacion']);
        $user = Auth::user(); 

        $id = Auth::id();
        $urlPrincipal = Urlimagenes::where('idPublicacion', '=', $request->idPublicacion)->first();  
        $Articulos = new Articulos;
        $Articulos->idUser = $id; 
        $Articulos->tipoVenta = $request->tipo;
        $Articulos->titulo = $request->titulo;
        $Articulos->precio = floatval($request->precio);
        $Articulos->moneda = $request->moneda;
        $Articulos->tipoPublicacion = $request->listingTypes;
        $Articulos->estado = $request->estado;
        $Articulos->municipio = $request->municipio;
        $Articulos->colonia = $request->colonia;
        $Articulos->telefono = $request->telefono;
        $Articulos->categoria = $request->categoria;
        $Articulos->modelo = $request->modelo;
        $Articulos->marca = $request->marca;
        $Articulos->anio = $request->anio;
        $Articulos->urlvideo = $request->videoURL;
        $Articulos->numPuertas = $request->numPuertas;
        $Articulos->kilometros = $request->kilometros;
        $Articulos->idPublicacion = $request->idPublicacion;
        $Articulos->descripcion = $request->descripcion; 
        $Articulos->horarioContacto =$request->horarioContacto;
        $Articulos->color = $request->color;
        $Articulos->tipoCombustible = $request->tipoCombustible;
        $Articulos->motor = $request->motor;
        $Articulos->direccionAuto = $request->direccionAuto;
        $Articulos->transmicion = $request->transmicion;
        $Articulos->version = $request->version;
        $Articulos->urlPrincipal = $urlPrincipal->url;
        $Articulos->estadoPublicacion = 1;
        $Articulos->cantidad=(int)$request->cantidadArticulos;
        $Articulos->arrayCaracteristicas = $request->arrayCaracteristicas;
        $Articulos->urlPrincipal = $urlPrincipal->url; 
        $Articulos->garantia = $request->garantia;
        $Articulos->metodo_envio = $request->metodo_envio;
        $Articulos->save();
        return Redirect::route('estadoPublicacion',['idPublicacion' => $request->idPublicacion,'user'=>$user]);
    } 
    public function showEstado(Request $request)
    {
        //Cambiar de idImg a idPublicacion

        $datos = Articulos::where('idPublicacion', '=', $request->idPublicacion)->first();
        $imagen = Urlimagenes::where('idPublicacion', '=', $request->idPublicacion)->first();  
        return view('vender.estadopublicacion')->with("datos",$datos)->with("imagen",$imagen);
    }

    public function showPublicacion(Request $request)
    { 

        $idUser = $request->user; 
        if (isset(auth()->user()->_id)) {
            $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
            $vendedor = User::where(['_id'=>$idUser])->first();
            $ventas = Compras::where(['idPublicacion'=>$request->id])->get(); 
            $datos = Articulos::where(['_id' => $request->id,'idUser'=>$idUser])->first();  
            $res = Comentarios::where(['publicacion'=>$request->id])->get();
           
            if ($datos!="") {
                $imagen = Urlimagenes::where('idPublicacion', '=', $datos->idPublicacion)->first(); 
                return view('vender.verPublicacion' )->with(['datos'=>$datos,'comentarios'=>$res, 'direccion'=>$direccion])->with('imagen',$imagen)->with('vendedor',$vendedor->nombre." ".$vendedor->apellido)->with(['idVendedor'=>$vendedor->_id,'totalVentas'=>count($ventas)]);
            }else{
                return view('dashboard');
            }
        }else{
            $vendedor = User::where(['_id'=>$idUser])->first();
            $ventas = Compras::where(['idPublicacion'=>$request->id])->get(); 
            $datos = Articulos::where(['_id' => $request->id,'idUser'=>$idUser])->first(); 
            $res = Comentarios::where(['publicacion'=>$request->id])->get();
            
            if ($datos!="") {
                $imagen = Urlimagenes::where('idPublicacion', '=', $datos->idPublicacion)->first(); 
                return view('vender.verPublicacion')->with(['datos'=>$datos, 'comentarios'=>$res])->with('imagen',$imagen)->with('vendedor',$vendedor->nombre." ".$vendedor->apellido)->with(['idVendedor'=>$vendedor->_id,'totalVentas'=>count($ventas)]);
            }else{
                return view('dashboard');
            }
        }
        
        
        
    }

    public function verPreguntas(Request $request)
    {
        $preguntas = Comentarios::where(['vendedor'=>auth()->user()->_id,  'respuesta'=>''])->get();
            


        $articulos= array();
        $compradores=array();
        foreach ($preguntas as $id) {
        $datos = Articulos::where(['_id' => $id->publicacion])->get();
        $comprador = User::where(['_id'=>$id->idEmisor])->get(); 
        
        array_push($articulos, $datos[0]);
           
        array_push($compradores, $comprador[0]);
           
        } 

        
        return view('usuario.menu.preguntas')->with(['articulos'=>$articulos, 'preguntas'=>$preguntas, 'comprador'=>$compradores]); 
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
          'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
         ]);
         if($validation->passes())
         {
            $image = $request->file('select_file');
            $new_name = $request->idImg . '.' . $image->getClientOriginalExtension();
            $dir = 'images/'.$request->idUser.'/'.$request->idPublicacion.'/'.$new_name;
            if(file_exists($dir)) //verifica que el archivo existe 
             {  
                unlink($dir); // si es true, llama la función   
             }  
            $image->move(public_path('images/'.$request->idUser.'/'.$request->idPublicacion.'/'), $new_name);
            //Almacenamiento de la URL de la imagen agregada
            if(!Urlimagenes::where(['idPublicacion' => $request->idPublicacion,'tipoImg' => $request->idImg])->exists()){
                $Imagen = new Urlimagenes;
                $Imagen->idPublicacion = $request->idPublicacion;
                $Imagen->url = $new_name;
                $Imagen->tipoImg = $request->idImg;
                $Imagen->save();

                $idImagen = $Imagen->getKey();
            }else{
                $datos = Urlimagenes::where(['idPublicacion' => $request->idPublicacion,'tipoImg'=>$request->idImg])->update(['url' => $new_name]);
                $infoImg = Urlimagenes::where(['idPublicacion' => $request->idPublicacion,'tipoImg'=>$request->idImg])->get();
                $idImagen = $infoImg[0]->_id;
            }

          return response()->json([
           'message'   => 'Image Upload Successfully',
           'uploaded_image' => '<img src="images/'.$request->idUser.'/'.$request->idPublicacion.'/'.$new_name.'?'.'+Date.now()" class="img-thumbnail" width="300" />',
           'class_name'  => 'alert-success',
           'url' => $new_name,
           'urlCompleta' => $dir,
           'idImagen' => $idImagen,
           'tipoImg' => $request->idImg
          ]);
         }
         else
         {
          return response()->json([
           'message'   => $validation->errors()->all(),
           'uploaded_image' => '',
           'class_name'  => 'alert-danger'
          ]);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showModificarVEHI(Request $request)
    {
        $user = Auth::user(); 

        $datos = Articulos::where(['_id' => $request->itemId,'idUser'=>$user->_id])->first();  
        if ($datos!="") {
            $imagen = Urlimagenes::where('idPublicacion', '=', $datos->idPublicacion)->get();  
            return view('vender.modificarVEHI')->with('datos',$datos)->with('imagen',$imagen); 

        }else{
            return "0";
        } 
    }

    public function delateImagen(Request $request)
    {
        if ($request->ajax()) { 
            if (!unlink($request->link))
            {
               echo ("$link No fue posible eliminar la imagen");
            }
            else
            {
                $datos = Urlimagenes::where('_id', $request->idImg)->update(['url' => '']);
                if ($request->tipo == "principal") {
                    return response()->json([
                       'contenido'   => '<p class="picture-uploader-add">Agregar</p><div class="picture-uploader-controls"><p role="button" class="ch-close ch-hide"><span class="ch-hide">x</span></p> </div><p class="picture-uploader-principal">Foto principal</p>'
                      ]);
                }
               return response()->json([
                    'contenido' =>'<p class="picture-uploader-add">Agregar</p><div class="picture-uploader-controls"><p role="button" class="ch-close ch-hide"><span class="ch-hide">x</span></p></div>'
                ]);
            }
        }
    }

    public function updateVEHI(Request $request)
    {
        if ($request->tipoUpdate=="opcional") {
            $datos = Articulos::where('_id', $request->idItem)->update([
                                                                    'titulo' => $request->titulo,
                                                                    'precio' => $request->precio,
                                                                    'moneda' => $request->moneda,   
                                                                    'kilometros' => $request->kilometros,
                                                                    'telefono' => $request->telefono,
                                                                    'telefono2' => $request->telefono2, 
                                                                 ]);
        }else{
            $datos = Articulos::where('_id', $request->idItem)->update([
                                                                    'titulo' => $request->titulo,
                                                                    'precio' => $request->precio,
                                                                    'moneda' => $request->moneda,
                                                                    'estado' => $request->estado,
                                                                    'municipio' => $request->municipio,
                                                                    'colonia' => $request->colonia,
                                                                    'telefono' => $request->telefono,
                                                                    'modelo' => $request->modelo,
                                                                    'marca' => $request->marca,
                                                                    'anio' => $request->anio,
                                                                    'urlvideo' => $request->urlvideo,
                                                                    'numPuertas' => $request->numPuertas,
                                                                    'kilometros' => $request->kilometros,
                                                                    'descripcion' => $request->descripcion,
                                                                    'horarioContacto' => $request->horarioContacto,
                                                                    'color' => $request->color,
                                                                    'tipoCombustible' => $request->tipoCombustible,
                                                                    'motor' => $request->motor,
                                                                    'direccionAuto' => $request->direccionAuto,
                                                                    'transmicion' => $request->transmicion,
                                                                    'version' => $request->version,
                                                                    'urlPrincipal' => $request->urlPrincipal,
                                                                    'arrayCaracteristicas' => $request->arrayCaracteristicas
                                                                 ]);
        }
        
        return Redirect::route('publicaciones');
    } 

    public function cargarComentarios(Request $request){
        if ($request->ajax()) {
            $res = Comentarios::where(['vendedor'=>auth()->user()->_id,'estadoMsj'=>0])->get();
            if ($res!="[]") {
                $articulo = Articulos::where(['_id'=>$res[0]->publicacion])->get();
                return response()->json([
                            "numComentarios" => count($res),
                            "res" => $res,
                            "autor" => auth()->user()->_id,
                            "art"=>$articulo
                        ]); 
            }else{
                return response()->json([
                        "res" => 0

                    ]);
            }
        }else{
            return response()->json([
                        "res" => 0

                    ]); 
        }
    }

    public function addComent(Request $request)
    {
        $dateNow = new \MongoDB\BSON\UTCDateTime(); 
        if ($request->question!="") {   
            if ($request->vendedor!=auth()->user()->_id) {
                if ($request->ajax()) {
                    $pregunta = new Comentarios;
                    $pregunta->pregunta=$request->question;
                    $pregunta->nomEmisor=auth()->user()->nombre;
                    $pregunta->idEmisor=auth()->user()->_id;
                    $pregunta->estadoMsj=0;
                    $pregunta->publicacion=$request->itemId;
                    $pregunta->fechaRegistro=$dateNow;
                    $pregunta->vendedor=$request->vendedor;
                    $pregunta->respuesta="";
                    $pregunta->save(); 
                    $res = Comentarios::where(['publicacion'=>$request->itemId])->get();

                    return response()->json([
                        "res" => $res 

                    ]); 
                }   
            }else{
                return response()->json([
                        "res" => "No puedes comentar sobre tus propias publicaciones"

                    ]);
            }
            
        }else{
            return Redirect::back()->withErrors(['Campo de comentario requerido']);
        } 
    }  



 public function responder(Request $request)
    {
        $datos = Comentarios::where('_id', $request->itemId)->update([ 'respuesta' => $request->resp, 'estadoMsj'=>1 ]);


        $preguntas = Comentarios::where(['vendedor'=>auth()->user()->_id,  'respuesta'=>''])->get();
            
        $articulos= array();
        $compradores=array();
        foreach ($preguntas as $id) {
        $datos = Articulos::where(['_id' => $id->publicacion])->get();
        $comprador = User::where(['_id'=>$id->idEmisor])->get(); 
        
        array_push($articulos, $datos[0]);
           
        array_push($compradores, $comprador[0]);
           
        } 
        
        return view('usuario.menu.preguntas')->with(['articulos'=>$articulos, 'preguntas'=>$preguntas, 'comprador'=>$compradores]); 
    }


}
