<?php 
print_r($_POST);

include '../models/conexion.php';

$id = $_POST['id'];
$brand = $_POST['inputBrand'];
$year = $_POST['inputYear'];
$model = $_POST['inputModel'];
$vendor = $_POST['inputVendor'];
$status = $_POST['inputStatus'];
$price = $_POST['inputPrice'];

$request = $db->prepare("UPDATE carsinfo SET brand = ?, yearLote = ?, model = ?, vendor = ?, carStatus = ?, price = ? WHERE id = ?");
$result = $request->execute([$brand, $year, $model, $vendor, $status, $price, $id]);

if($result){
    header("Location: ../index.php");
}else {
    echo "Error updating the car info";
}

?>