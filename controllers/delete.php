<?php 

include '../models/conexion.php';

$carsinfoCode = $_GET['id'];

$request = $db->prepare("DELETE from carsinfo WHERE id =?");
$result = $request->execute([$carsinfoCode]);

if($result){
    header("Location: ../index.php");
}else {
    echo "Error deleting the car";
}

?>
