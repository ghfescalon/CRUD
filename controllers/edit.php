<?php include '../templates/header.php'?>

<?php include '../models/conexion.php'; 

$carsinfoCode = $_GET['id'];

$request = $db->prepare("SELECT * from carsinfo WHERE id =?");
$request->execute([$carsinfoCode]);

$carsinfo = $request->fetch(PDO::FETCH_OBJ);

//print_r($carsinfo) //data receiving test
?>

<div class="container">
<div class="row justify-content-center mb-2 mt-3">
<div class="card">
    <div class="card-header mb-2 ml-2 mr-2 mt-3">Edit the car information</div>
    <form action="update.php" method="POST">
        <div  class="mb-2 ml-2 mr-2">
        <label>Brand</label>
        <input class="form-control" type="text" placeholder="Type the brand" name="inputBrand" value="<?php echo $carsinfo->brand?>" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Year</label>
        <input class="form-control" type="number" placeholder="Type the year" name="inputYear" value="<?php echo $carsinfo->yearLote?>" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Model</label>
        <input class="form-control" type="text" placeholder="Type the model" name="inputModel" value="<?php echo $carsinfo->model?>" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Vendor</label>
        <input class="form-control" type="text" placeholder="Type the vendor" name="inputVendor" value="<?php echo $carsinfo->vendor?>" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Status</label>
        <input class="form-control" type="text" placeholder="Type the car status" name="inputStatus" value="<?php echo $carsinfo->carStatus?>" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Price</label>
        <input class="form-control" type="number" placeholder="Type the price" name="inputPrice" value="<?php echo $carsinfo->price?>" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $carsinfo->id ?>">
        <input type="submit" class="btn btn-outline-info mb-2 ml-2" value="Save">
    </form>
</div>
</div>
</div>

<br><br><br>

<?php include '../templates/footer.php'?>