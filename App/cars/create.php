
<?php
//--------------------------------------------//
$cars=[    "Audi", "BMW", "Mercedes-Benz", "Porsche", "Lexus", "Jaguar", "Tesla",
"Toyota", "Honda", "Nissan", "Mazda", "Subaru", "Mitsubishi", "Suzuki",
"Ford", "Chevrolet", "Cadillac", "Dodge", "Jeep",
"Volkswagen", "Peugeot", "Citroën", "Fiat", "Renault", "Volvo", "Skoda",
"Hyundai", "Kia", "Genesis",
"Ferrari", "Lamborghini", "McLaren", "Bugatti", "Aston Martin", "Bentley", "Rolls-Royce"];
//----------------------------------------------//
include_once "../../vendor/database.php";
include_once "../../vendor/function.php";
$errors=[];
if(isset($_POST['send'])){
$title=$_POST['Title'];
$model=$_POST['Model'];
$select="SELECT id from brands where name='$model'";
$res=mysqli_query($connect,$select);
$data=mysqli_fetch_assoc($res);
$brand=$data['id'];
$year=$_POST['years'];
$km=$_POST['km'];
$description=$_POST['Description'];
$price=$_POST['price'];
$color=$_POST['color'];
$image=time().$_FILES['image']['name'];
$cus_id=$_GET['id'];
$insert="INSERT INTO cars VALUES (null,'$title','$model','$year',$km,'$color','$image','$description',$price,$brand,$cus_id)";
$data=mysqli_query($connect,$insert);
$tpm=$_FILES['image']['tmp_name'];
$location="../upload_cars/$image";
move_uploaded_file($tpm,$location);
redirect('index.php');
}
 
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../shared/head.php';
?>
<body>
<main>
      <div class="container" >

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
                      <h5 class="card-title text-center pb-0 fs-4">Add Car For Sale</h5>
                
                    </div>

                    <form class="row g-3 needs-validation"  method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Title</label>
                        <div class="input-group has-validation">
                          
                          <input type="text" name="Title" class="form-control"placeholder="Title" >
                       
                        </div>
                      </div>
                      <div class="col-6">
                      <label for="fruits">Select Model:</label>
        <select  name="Model">
          <?php foreach($cars as $item): ?>
          <option value="<?=$item?>"><?=$item?></option>
          <?php endforeach;?>
          </select>
                      </div>
                      <div class="col-4">
                      <label for=>Select Year:</label>
                  <select  name="years">
                   <?php for($i=1988;$i<=2024;$i++): ?>
                   <option value="<?=$i?>"><?=$i?></option>
                      <?php endfor;?>
                 </select>
        
        
                      </div>
                      <div class="col-12">
                        <label class="form-label">Description</label>
                        <div class="input-group has-validation">
                          
                          <input type="text"name="Description" class="form-control" >
                       
                        </div>
                      </div>
                      <div class="col-12">
                        <label class="form-label">KiloMater</label>
                        <div class="input-group has-validation">
                          
                          <input type="number" name="km" class="form-control" >
                       
                        </div>
                      </div>
                      <div class="col-12">
                        <label  class="form-label">Color</label>
                        <div class="input-group ">
                          <input type="text" name="color" class="form-control" >                      
                        </div>
                        <div class="col-12">
                        <label class="form-label">Price</label>
                        <div class="input-group ">
                          
                          <input type="number" name="price" class="form-control" >
                       
                        </div>
                      </div>
                      <div class="col-12">
                        <label  class="form-label">Image</label>
                        <div class="input-group ">
                          <input type="file" name="image" class="form-control" >
                       
                        </div>
                      </div>
                      </div>
                      <div class="col-12">


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

        </section>

      </div>
    </main>



<?php
include_once '../../shared/script.php';