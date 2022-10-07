<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$servername = "localhost";
$database = "riwydeop_intranet";
$username = "riwydeop_intranet";
$password = "Firefox@2000";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$razsoc = $_POST['nombres'];
$rucdni = $_POST['rucdni'];
$correo = $_POST['email'];
$contacto = $_POST['contacto'];
$concepto = $_POST['concepto'];
$montototal = $_POST['montototal'];
$montoabonado = $_POST['montoabonado'];
$tipopago = $_POST['tipopago'];
$banco = $_POST['banco'];
$fechadeposito = $_POST['fechadeposito'];
$noperacion = $_POST['noperacion'];
$observacion = $_POST['observacion'];

$sql = "insert into pagos values (default, '$razsoc','$rucdni','$correo','$contacto','$concepto','$montototal','$montoabonado','$tipopago','$banco','$fechadeposito','$noperacion','$observacion')";

if ($result = mysqli_query($conn, $sql)){
      header('Location: registro-ok.php');
}
mysqli_close($conn);
?>