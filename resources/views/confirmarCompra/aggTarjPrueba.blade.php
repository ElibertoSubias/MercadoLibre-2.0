
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" 
        src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
<script type='text/javascript' 
  src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('mfsrs5u9jmuxn3se2rpp');
            OpenPay.setApiKey('pk_8738b48c29f449a69674d9b9d5602aba');
            OpenPay.setSandboxMode(true);
            //Se genera el id de dispositivo
            var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
            
            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop( "disabled", true);
                OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);                
            });
            
           
            var sucess_callbak = function(response) {
               results = document.getElementById('resultDetail'); 

                /*alert("Id tarjeta: " + response.data.id + "A nombre de: " + response.data.card.holder_name + "Marca de tarjeta usada: " + response.data.card.brand);*/
              var token_id = response.data.id;
              $('#token_id').val(token_id);
              $('#device_session_id').val(deviceSessionId);
              $('#payment-form').submit();
                
            };

            var error_callbak = function(response) {
                var desc = response.data.description != undefined ? response.data.description : response.message;
                alert("Fallo en la transacción [" + response.status + "] " + desc);
                $("#pay-button").prop("disabled", false);
            };

        });
    </script>
    {!! Html::style('css/styleAggTarjeta.css') !!}
</head>
<body>
    <div class="bkng-tb-cntnt">
        <div class="pymnts">
            <form action="{{route('save_customer_card')}}" method="POST" id="payment-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                <input type="hidden" name="token_id" id="token_id">
                <input type="hidden" name="device_session_id" id="device_session_id">
                <input type="hidden" name="amount" id="amount" value="">
                <input type="hidden" name="description" id="description" value="Pago Servicio Familia Segura">
                <div class="pymnt-itm card active">
                    <h2>Tarjeta de crédito o débito</h2>
                    <div class="pymnt-cntnt">
                        <div class="card-expl">
                            <div class="credit"><h4>Tarjetas de crédito</h4></div>
                            <div class="debit"><h4>Tarjetas de débito</h4></div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Datos del cliente</label>
                                <input type="text" name="name" placeholder="Nombre" autocomplete="off">
                                <input type="text" name="last_name" placeholder="Apellido" autocomplete="off">
                                
                            </div>
                            
                            <div class="sctn-col l">
                                <label>Nombre</label>
                                <input type="text" name="holder_name" placeholder="Tal como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">                              
                                
                            </div>
                            
                            <div class="sctn-col l">
                                <label>Datos de contacto</label>
                                <input type="text" name="phone_number" placeholder="Teléfono" autocomplete="off">
                                <input type="email" name="email" placeholder="Correo electrónico" autocomplete="off">
                                
                            </div>
                            <div class="sctn-col">
                                <label>Número de tarjeta</label>
                                <input type="text" autocomplete="off" name="card_number" data-openpay-card="card_number"></div>
                            </div>
                            <div class="sctn-row">
                                <div class="sctn-col l">
                                    <label>Fecha de expiración</label>
                                    <div class="sctn-col half l">
                                        <input type="text" placeholder="Mes" name="expiration_month" data-openpay-card="expiration_month">
                                    </div>
                                    <div class="sctn-col half l">
                                        <input type="text" placeholder="Año" name="expiration_year" data-openpay-card="expiration_year">
                                    </div>
                                </div>
                                <div class="sctn-col cvv"><label>Código de seguridad</label>
                                    <div class="sctn-col half l"><input type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2" name="cvv2"></div>
                                </div>
                            </div>
                            <div class="openpay"><div class="logo">Transacciones realizadas vía:</div>
                            <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                        </div>
                        <div class="sctn-row">
                                <a class="button rght" id="pay-button">Guardar tarjeta</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>