
<?php
include_once "../../vendor/database.php";
include_once "../../vendor/function.php";
$errors=[];
if(isset($_POST['send'])){
 $name=$_POST['name'];
$email=$_POST['email'];
 $password=$_POST['password'];
 $status=$_POST['status'];
 $hash=password_hash($password,PASSWORD_DEFAULT);
 $insert="INSERT INTO customers VALUES(null,'$name','$email','$hash','$status')";
 mysqli_query($connect,$insert);
 redirect("login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../shared/head.php';
?>
<body>
<main>
      <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block"></span>
                  </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Create Account For Customer</h5>
                
                    </div>

                    <form class="row g-3 needs-validation"  method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">NAME</label>
                        <div class="input-group has-validation">
                          
                          <input type="text" name="name" class="form-control" >
                       
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Email Address</label>
                        <div class="input-group has-validation">
                          
                          <input type="email" name="email" class="form-control" >
                       
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                      
                    

                      <div class="col-12">

                      </div>
                      
                      <div class="col-12">
                      <label for="">saller</label>
                      <input type="radio" value="saller" name="st">
                      <label for="">bayer</label>
                      <input type="radio" value="bayer" name="st">
                    
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="send"> Create</button>
                      </div>
                    
                    </form>

                  </div>
                </div>
              

                <div class="credits">

                  Designed by <a href="https://www.linkedin.com/feed/">Mustafa Elamir</a>
                </div>
              </div>
            </div>
          </div>

        </section>

      </div>
    </main>



<?php
include_once '../../shared/script.php';