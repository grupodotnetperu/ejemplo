<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pedido de Servicios Web</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >

	<div id="form_container">
	<div style="text-align:center;"><img style="max-width: 100%; margin-top:20px;" src="logodotnetperu.png"/></div>
	<h1></h1>
		<form id="form01" class="appnitro" enctype="multipart/form-data" method="post" action="registrandopago.php">
			
            <div class="form_description" style="text-align: center;">
			    <h2 style="color: blue;">Registro de Pagos</h2>
			    <p>Registro Pago de clientes</p>
		    </div>

			<ul>
			    <li id="li_1">
		            <label class="description" for="element_1">Razón Social o nombres completos</label>
		            <div>
			            <input id="element_1" name="nombres" class="element text large" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_1"><small>Ingrese la Razón social o nombres completos</small></p> 
		        </li>

				<li id="li_4">
		            <label class="description" for="element_4">RUC / DNI</label>
		            <div>
			            <input id="element_4" name="rucdni" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_4"><small>Ingrese numero de RUC o DNI</small></p>
		        </li>

				<li id="li_3">
		            <label class="description" for="element_3">Correo electrónico</label>
		            <div>
			            <input id="element_3" name="email" class="element text large" type="email" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_3"><small>Ingrese correo electrónico</small></p>
		        </li>

                <li id="li_2">
		            <label class="description" for="element_2">Nombre de contacto</label>
		            <div>
			            <input id="element_2" name="contacto" class="element text large" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_2"><small>Ingrese nombre de contacto</small></p> 
		        </li>

				<li id="li_1">
		            <label class="description" for="element_1">Concepto del Servicio</label>
		            <div>
			            <input id="element_1" name="concepto" class="element text large" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_1"><small>Ingrese Concepto del Servicio</small></p> 
		        </li>

				<li id="li_4">
		            <label class="description" for="element_4">Monto total acordado</label>
		            <div>
			            <input id="element_4" name="montototal" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_4"><small>Ingrese Monto Total acordado</small></p>
		        </li>

				<li id="li_4">
		            <label class="description" for="element_4">Monto abonado o pagado</label>
		            <div>
			            <input id="element_4" name="montoabonado" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_4"><small>Ingrese Monto abonado o pagado</small></p>
		        </li>
                   
                <li id="li_4">
		            <label class="description" for="element_4">¿Es Pago parcial o Total?</label>
		            <div>
			            <input id="element_4" name="tipopago" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_4"><small>Ingrese tipo de pago</small></p>
		        </li>
                
                <li id="li_5">
		            <label class="description" for="element_5">Banco o Entidad Financiera</label>
		            <div>
			            <input id="element_5" name="banco" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_5"><small>Ingrese Banco o Entidad Financiera</small></p> 
		        </li>

				<li id="li_5">
		            <label class="description" for="element_5">Fecha de pago o deposito</label>
		            <div>
			            <input id="element_5" name="fechadeposito" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_5"><small>Ingrese Fecha de pago o deposito</small></p> 
		        </li>
		        
		        <li id="li_5">
		            <label class="description" for="element_5">Nro de Operación</label>
		            <div>
			            <input id="element_5" name="noperacion" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_5"><small>Ingrese Nro de Operación</small></p> 
		        </li>
                
                <li id="li_6">
		            <label class="description" for="element_6">¿Alguna observación o mensaje final?</label>
		            <div>
			            <textarea id="element_6" name="observacion" class="element textarea medium" required></textarea> 
		            </div>
                    <p class="guidelines" id="guide_6"><small>describa alguna observación o final</small></p> 
		            </li>
				<center><input id="enviar" class="button" type="submit" name="enviar" value="REGISTRAR PAGO" /></center>
			</ul>
		</form>
	</div>
	</body>
</html>