
<!DOCTYPE html>
<html lang="en">
<?php

include_once '../../shared/head.php';

if(!$_SESSION['customer']){
  header("location:login.php");}

?>
<body>
<?php
include_once '../../shared/header.php';
$select="SELECT * from cars";
$res=mysqli_query($connect,$select);

?>
<main id="main" class="main">

  
 <?php foreach($res as $data):?>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <img src="./App/upload_cars/<?=$data['image']?>" class="card-img-top" alt="...">
        <h5 class="card-title">Title:<?=$data['titel']?></h5>
        <h6>Model:<?=$data['model']?></h6>
        <h6>Price:<?=$data['price']?></h6>
        <p class="card-text"></p>
        <a href="./App/cars/view.php?edit=<?=$data['id']?>" class="btn btn-primary">show More</a>
      </div>
    </div>
  </div>
 
</div>
<?php  endforeach;?> 
    <section class="section dashboard">
     
    </section>

  </main>
  <?php include_once '../../shared/aside.php';?>

  <footer id="footer" class="footer">
  
    <div class="credits">
    
      Designed by <a href="https://bootstrapmade.com/">Mustafa Elamir</a>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>
</html>