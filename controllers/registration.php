<?php

//print_r($_POST)

if(empty($_POST['inputBrand']) || empty($_POST['inputYear']) || empty($_POST['inputModel']) || empty($_POST['inputVendor']) || empty($_POST['inputStatus']) || empty($_POST['inputPrice'])){
echo"Car didn't add, please make sure of complete all field";
exit();
}

include '../models/conexion.php';

$brand = $_POST['inputBrand'];
$year = $_POST['inputYear'];
$model = $_POST['inputModel'];
$vendor = $_POST['inputVendor'];
$status = $_POST['inputStatus'];
$price = $_POST['inputPrice'];

echo $brand, $year, $model, $vendor, $status, $price;

$request = $db->prepare("INSERT INTO carsinfo(brand,yearLote,model,vendor,carStatus,price) VALUES(?,?,?,?,?,?)");
$result = $request->execute([$brand, $year, $model, $vendor, $status, $price]);

if($result){
    header("Location: ../index.php");
}else {
    echo "Error adding the car";
}

?>