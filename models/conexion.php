<?php 

$db_name="carcollection";
$user="root";
$passwork="";

try{

    $db = new PDO(
        'mysql:host=localhost;
        dbname='.$db_name,
        $user,
        $passwork
    );

} catch (Exception $e) {
    //Manejo de excepciones (errores)
    echo "Conexion fail".$e->getMessage();

}

?>