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
$contacto = $_POST['contacto'];
$correo = $_POST['email'];
$celular = $_POST['celular'];
$whatsapp = $_POST['whatsapp'];
$servicio = $_POST['servicio'];

$sql = "insert into pedidos values (default, '$razsoc','$contacto','$correo','$celular','$whatsapp','$servicio')";

if ($result = mysqli_query($conn, $sql)){
      header('Location: registro-ok.php');
}
mysqli_close($conn);
?>