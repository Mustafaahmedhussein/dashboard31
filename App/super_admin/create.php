<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../shared/head.php';
include_once '../../vendor/function.php';
include_once '../../vendor/database.php';
if(isset($_POST['send'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$hash=password_hash($password,PASSWORD_DEFAULT);
$insert="INSERT INTO super_admin VALUES(null,'$name','$email','$hash')";
$data=mysqli_query($connect,$insert);
redirect();
}
?>
<body>
<div class="container col-12">
<main id="main" class="main">
  <div class="pagetitle">
  <h1> Create Super_Admin
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
    <div class="col-lg-6">
      <?php if(!empty($errors)): ?>
<div class="alert alert-danger">
<ul>
  <?php foreach ($errors as $error): ?>
    <li><?=$error?></li>
  <?php endforeach ;?>
</ul>
</div>
<?php endif;?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Horizontal Form</h5>

          
          <form method="post" enctype="multipart/form-data" >
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control"name="password">
              </div>
            </div>
           
     
          
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="send">send</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>

        </div>
      </div>

    
        </div>
      </div>

    </div>
  </div>
</section>

</main>
</div>







<?php
include_once '../../shared/script.php'
?>
</body>

</html>