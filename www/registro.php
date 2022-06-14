<?php
// include_once('mysql-connect.php');

function conn(){
    $hostname = "mysql-app";
    $user = "seleguin";
    $pass = "S3l3gu1n@#";
    $dbname = "solicitan_info";



        $conectar = mysqli_connect($hostname, $user, $pass, $dbname, $table);
        return $conectar;
}

$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

echo "Los datos son los siguientes: <br>";
echo "$nombre, $empresa, $email, $telefono, $mensaje,";

$conectar=conn();
$sql="INSERT INTO personas (nombre, empresa, email, telefono, mensaje)
VALUES('$nombre', '$empresa', '$email', '$telefono', '$mensaje')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! - Error: ".mysqli_error($conectar), E_USER_ERROR);
echo "$sql";

?>