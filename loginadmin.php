<?php
include_once './shared/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once './vendor/function.php';
include_once './vendor/database.php';

?>
<body>
  <?php
  if (isset($_POST['send'])) {
 $Email=$_POST['Email'];
 $password=$_POST['password'];
 $select="SELECT * from admin WHERE `email`='$Email'";
 $data=mysqli_query($connect,$select);
 $item=mysqli_fetch_assoc($data);
 $hash=$item['password'];
 $check=password_verify($password,$hash);
 if($check){
    $_SESSION['admin']=[
        "id"=>$item['id'],
        "name"=>$item['name'],
        "email"=>$item['email'],
        "image"=>$item['image'],
        "phone"=>$item['phone']
    ];

redirect("index.php");

 }
  }else{

    echo "<script> alert('Email or Password Incorrect!')</script>";
   }




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
                    <span class="d-none d-lg-block">NiceAdmin</span>
                  </a>
                </div>

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Login Admin</h5>
                      <p class="text-center small">Enter your username & password to login</p>
                    </div>

                    <form class="row g-3 "  method="POST">

                      <div class="col-12">
                        <label class="form-label">Email Address</label>
                        <div class="input-group ">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="email" name="Email" class="form-control">
                          <div class="invalid-feedback">Please enter your username.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control"  >
                        <div >Please enter your password!</div>
                      </div>

                      <div class="col-12">

                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="send"> Login</button>
                      </div>
                      <div class="col-12">
               
                      </div>
                    </form>

                  </div>
                </div>

                <div class="credits">

                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>

              </div>
            </div>
          </div>

        </section>

      </div>
    </main>
    <?php
    include_once 'C:\xampp\htdocs\dashboard31\shared\script.php';


    ?>


    <?php
    include_once './shared/script.php'; ?>