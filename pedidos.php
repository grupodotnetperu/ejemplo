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
		<form id="form01" class="appnitro" enctype="multipart/form-data" method="post" action="registrar.php">
			
            <div class="form_description" style="text-align: center;">
			    <h2 style="color: blue;">Pedido de Servicios Web</h2>
			    <p>Registro de pedidos de clientes</p>
		    </div>

			<ul>
			    <li id="li_1">
		            <label class="description" for="element_1">Razón Social o nombres completos</label>
		            <div>
			            <input id="element_1" name="nombres" class="element text large" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_1"><small>Ingrese la Razón social o nombres completos</small></p> 
		        </li>
                
                <li id="li_2">
		            <label class="description" for="element_2">Nombre de contacto</label>
		            <div>
			            <input id="element_2" name="contacto" class="element text large" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_2"><small>Ingrese nombre de contacto</small></p> 
		        </li>
                
                <li id="li_3">
		            <label class="description" for="element_3">Correo electrónico</label>
		            <div>
			            <input id="element_3" name="email" class="element text large" type="email" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_3"><small>Ingrese correo electrónico</small></p>
		        </li>
                
                <li id="li_4">
		            <label class="description" for="element_4">Número celular</label>
		            <div>
			            <input id="element_4" name="celular" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_4"><small>Ingrese numero celular</small></p>
		        </li>
                
                <li id="li_5">
		            <label class="description" for="element_5">Número de WhatsApp</label>
		            <div>
			            <input id="element_5" name="whatsapp" class="element text medium" type="text" maxlength="255" value="" required/> 
		            </div>
                    <p class="guidelines" id="guide_5"><small>Ingrese número de WhatsApp</small></p> 
		        </li>
                
                <li id="li_6">
		            <label class="description" for="element_6">Servicio deseado</label>
		            <div>
			            <textarea id="element_6" name="servicio" class="element textarea medium" required></textarea> 
		            </div>
                    <p class="guidelines" id="guide_6"><small>describa detalladamente el servicio que desea adquirir o lo que esta necesitando.</small></p> 
		            </li>
				<center><input id="enviar" class="button" type="submit" name="enviar" value="REGISTRAR PEDIDO" /></center>
			</ul>
		</form>
	</div>
	</body>
</html>