<!DOCTYPE html>
<html lang="en">
<?php
include_once './vendor/function.php';
include_once './shared/head.php';
include_once './vendor/database.php';
$name_error = "";
$password_error = "";
if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];

  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $images = $_FILES['image'];
  $image_name = time() . $images['name'];

  $email = $_POST['email'];
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $insert = "INSERT INTO users VALUES (null,'$name','$phone','$address','$country','$email','$hash','$image_name')";
  $data = mysqli_query($connect, $insert);
  if ($data) {
    echo "true";
  } else {
    echo "false";
  }
  // redirect('login.php');
  $location = "./App/upload/$image_name";
  $tem = $images['tmp_name'];
  move_uploaded_file($tem, $location);
}



?>

<body>

</body>

</html>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-4 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>


                <form class="row g-3 " method="post" enctype="multipart/form-data">
                  <div class="col-12">
                    <label for="yourName" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <h5 class="text-bg-danger"><?= $name_error ?></h5>


                    <div class="invalid-feedback">Please, enter your name!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Your phone</label>
                    <input type="tel" name="phone" class="form-control" id="yourEmail" required>
                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">address</label>
                    <div class="input-group has-validation">
                      <input type="text" name="address" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Country</label>
                    <div class="input-group has-validation">
                      <input type="country" name="country" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please choose a Country</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Email Address</label>
                    <div class="input-group has-validation">

                      <input type="email" name="email" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please choose a email</div>
                    </div>


                    <div class="col-12">
                      <label for="" class="form-label">images</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <h6><?= $password_error ?></h6>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">


                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="send">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?= base_url('login.php') ?>">Log in</a></p>
                    </div>
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->