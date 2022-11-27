<?php include 'templates/header.php';?> 

<?php include 'models/conexion.php';

$sentencia = $db->query("SELECT * from carsinfo");

$carsinfo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($carsinfo)
?>

<div class="container">
 <div class="row justyfy-content-center">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Brand</th>
      <th scope="col">Year</th>
      <th scope="col">Model</th>
      <th scope="col">Vendor</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($carsinfo as $data){?>
    <tr>
      <th scope="row"><?php echo $data->id?></th>
      <td><?php echo $data->brand?></td>
      <td><?php echo $data->yearLote?></td>
      <td><?php echo $data->model?></td>
      <td><?php echo $data->vendor?></td>
      <td><?php echo $data->carStatus?></td>
      <td><?php echo $data->price?></td>
      <td><a href="./controllers/edit.php?id=<?php echo $data->id ?>" class="btn btn-outline-info mb-2 ml-2">Edit</a><a href="./controllers/delete.php?id=<?php echo $data->id ?>" class="btn btn-outline-danger mb-2 ml-2">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
 </table>
 </div>
</div>

<div class="container">
<div class="row justify-content-center mb-2 mt-3">
<div class="card">
    <div class="card-header mb-2 ml-2 mr-2 mt-3">Add a new car here</div>
    <form action="controllers/registration.php" method="POST">
        <div  class="mb-2 ml-2 mr-2">
        <label>Brand</label>
        <input class="form-control" type="text" placeholder="Type the brand" name="inputBrand" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Year</label>
        <input class="form-control" type="number" placeholder="Type the year" name="inputYear" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Model</label>
        <input class="form-control" type="text" placeholder="Type the model" name="inputModel" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Vendor</label>
        <input class="form-control" type="text" placeholder="Type the vendor" name="inputVendor" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Status</label>
        <input class="form-control" type="text" placeholder="Type the car status" name="inputStatus" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Price</label>
        <input class="form-control" type="number" placeholder="Type the price" name="inputPrice" aria-label="default input example" required>
        </div>
        <input type="submit" class="btn btn-outline-info mb-2 ml-2" value="Add">

    </form>
</div>
</div>
</div>

<br><br><br>

<?php include 'templates/footer.php'; ?>