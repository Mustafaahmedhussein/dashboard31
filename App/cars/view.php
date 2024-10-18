<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../shared/head.php';
include_once '../../vendor/function.php';
include_once '../../vendor/database.php';
if(isset($_GET['edit']))
$id=$_GET['edit'];
$select="SELECT * FROM cars WHERE id=$id";
$data=mysqli_query($connect,$select);
$item=mysqli_fetch_assoc($data);

?>
<body>
  <div class="container">
<div class="card ">
  <img src="../upload_cars/<?=$item['image']?>" class="card-img-top w-50" >
  <div class="card-body">
    <h2>Price:<?=$item['price']?>$</h2>
    <h4>Model:<?=$item['model']?></h4>
    <h5>Year: <?=$item['years']?></h5>
    <h5 class="card-title">Title:<?=$item['titel']?></h5>
    <p class="card-text">KM:<?=$item['km']?></p>
    <p class="card-text">COLOR:<?=$item['color']?></p>
    <p class="card-text">Description:<?=$item['description']?></p>

  </div>
</div>
</div>
</body>
</html>