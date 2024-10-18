
<html lang="en">
<?php
include_once '../../shared/head.php';
include_once '../../shared/head.php';
include_once '../../vendor/function.php';
include_once '../../vendor/database.php';
if(isset($_GET["update"])){
    $id=$_GET['update'];
    $select="SELECT *from admin where id=$id";
    $data=mysqli_query($connect,$select);
    $item=mysqli_fetch_assoc($data);
  
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $update="UPDATE admin
SET name = '$name', email = '$email', phone = '$phone'
WHERE id = $id;";
    $data=mysqli_query($connect,$update);
header("location:veiwadmin.php");

}
}
?>
<body>
<main>
      <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            
                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Create Account For Customer</h5>
                
                    </div>

                    <form class="row g-3 needs-validation"  method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">NAME</label>
                        <div class="input-group ">
                          <input type="text" name="name" class="form-control" value="<?= $item['name']?>" >
                       
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Email Address</label>
                        <div class="input-group ">
                          
                          <input type="email" name="email" class="form-control" value="<?= $item['email']?>" >
                       
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">phone</label>
                        <input type="tel" name="phone" class="form-control"  value="<?= $item['phone']?>">
                        <div class="invalid-feedback"></div>
                      </div>
                      
                    

                      <div class="col-12">

                      </div>
                      
                  
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="send"> Update</button>
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