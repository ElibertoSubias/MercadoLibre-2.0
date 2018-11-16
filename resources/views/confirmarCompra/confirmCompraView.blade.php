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
            $('#device_session_id').val(deviceSessionId);

            $('#pay-button').on('click', function(event) {
                event.preventDefault(); 
                $('#device_session_id').val(deviceSessionId);
              	$('#payment-form').submit();              
            }); 
        });
    </script> 
</head>
<body>
	<form action="{{route('confirmarCompraPrueba')}}" method="POST" id="payment-form">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
        <input type="hidden" name="token_id" id="token_id">
        <input type="hidden" name="device_session_id" id="device_session_id">
        <input type="hidden" name="cardId" value="{{$card->id}}">
        <input type="hidden" name="amount" id="amount" value="{{($precio+$costoEnvio)-14999}}">
        <input type="hidden" name="description" id="description" value="{{$titulo}}">

        <div class="pymnt-itm card active">
                    <h2>Tarjeta de crédito o débito</h2>
                    <div class="pymnt-cntnt">
                        
                        </div>
                        <div class="sctn-row">
                                
                        </div>
                        <a class="" id="pay-button">Guardar tarjeta</a>
                    </div>
                </div>
		method = card <br>
		Source_id = {{$card->id}}<br>
		amount = {{($precio+$costoEnvio)-$precio+1}}<br>
		cvv2 = {{$security_code}}<br>
		currency = MXN<br>
		mes = {{$card->expiration_month}}
		año = {{$card->expiration_year}}
		description = {{$titulo}}<br>
		order_id =<br>
		device_session_id = <br>
		customer = {{$customer->name}}<br> 
	</form>
</body>
</html>