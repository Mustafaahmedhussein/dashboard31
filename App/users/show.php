<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../shared/head.php';
include_once '../../vendor/database.php';
include_once '../../vendor/function.php';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $select="SELECT *FROM users Where id=$id";
  $data=mysqli_query($connect,$select);
  $user=mysqli_fetch_assoc($data);
}

?>
<body>
  <div class="container">
  <div class="card" style="width: 18rem;">
  <img src="../App/upload<?=$user['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
</body>
<?php
include_once '../../shared/script.php';
?>
</html>