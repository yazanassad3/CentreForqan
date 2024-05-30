<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>sign-in</title>
    <style>
            .gradient-custom {
            /* fallback for old browsers */
            background: #D1D9E1;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #D1D9E1,#1A5F6F);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom,  #D1D9E1,#217b8f)
            }
            a img:hover {
              carsor:pointer;
            }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-120 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
        <div class="card bg-white text-dark" style="border-radius: 1rem; border:solid 3px rgba(216, 172, 85, 1);">
          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-1 pb-3">
            <a href="index.php">
            <img src="assets/logo/logoForqan.png" class="fw-bold mb-1"></img>
            </a>
            <!--<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
            <p class="text-dark-50 mb-5">Please enter your login and password!</p>--> 

            <form action="login.php"  method="post">
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
                  <?php if (isset($_GET['error'])) { ?>

                  <p class="error"><?php echo $_GET['error']; ?></p>

                  <?php } ?>
                <p class="small mb-2 pb-lg-2"><a class="text-dark-50" href="#!">Forgot password?</a></p>

                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>
               
            </div>
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name=$_POST['email'];
  $pass=$_POST['password'];
  $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
  $query = "SELECT * FROM `user` WHERE name = '$name' AND password = '$pass' ";
  $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));

  //echo "correct";


}