<?php
#Salir si alguno de los datos no está presente
#Si todo va bien, se ejecuta esta parte del código...

include_once "conexion.php";
$nombrecompletousuario = $_POST["nombrecompletousuario"];
$cedula = $_POST["cedula"];
$cargo = $_POST["cargo"];
$username = $_POST["username"];
$password = $_POST["password"];
$tipousuario = $_POST["tipousuario"];


$sentencia = $conexion->prepare("INSERT INTO usuario(NombreCompletoUsuario, cedulausuario, Cargo, username, password, tipousuario) VALUES (?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombrecompletousuario, $cedula, $cargo, $username, $password, $tipousuario]);

if($resultado === TRUE){
	
	header("Location: ./checkout.html");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
