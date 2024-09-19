<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
  <!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet">
	<script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">

  </head>
  
  <?php

include("connections/conn.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role == 'designer') {
        $designerQuery = "INSERT INTO designer (username, email, password) VALUES ('$username', '$email', '$password')";
        $isInsertdesigner = mysqli_query($conn, $designerQuery);

        if ($isInsertdesigner) {
            echo '<script>alert("Data inserted successfully");
                window.location.href = "auth-login-designer.php";
            </script>';
        } else {
            echo '<script>alert("Something went wrong with designer registration")</script>';
        }
    }
     elseif ($role == 'customer') {
        $customerQuery = "INSERT INTO customers (username, email, password) VALUES ('$username', '$email', '$password')";
        $isInsertcustomer = mysqli_query($conn, $customerQuery);

        if ($isInsertcustomer) {
            echo '<script>alert("Data inserted successfully");
                window.location.href = "auth-login-customers.php";
            </script>';
        } else {
            echo '<script>alert("Something went wrong with customer registration")</script>';
        }
    } else {
        echo '<script>alert("Please select a valid role.")</script>';
    }
}

?>

  

  <body class="bg-register">


    <!--authentication-->
    <form action="auth-basic-register.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                    <div class="card-body p-5">
                        <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                        <h4 class="fw-bold text-center">Get Started Now</h4>
                        <p class="mb-4 text-center">Enter your credentials to create your account</p>

                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="e.g., hammad" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="e.g., example@user.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputRole" class="form-label">Select Role</label>
                            <select name="role" class="form-select" id="inputRole" required>
                                <option value="" disabled selected>Select your role</option>
                                <option value="customer">Customer</option>
                                <option value="designer">Designer</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="inputChoosePassword" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password" required>
                                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-grd-danger">Register</button>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <p class="mb-0">Already have an account? <a href="auth-basic-login.html">Sign in here</a></p>
                        </div>
                    </div> <!-- End of card body -->
                </div> <!-- End of card -->
            </div> <!-- End of column -->
        </div> <!-- End of row -->

        <div class="separator section-padding">
            <div class="line"></div>
            <p class="mb-0 fw-bold text-center">OR</p>
            <div class="line"></div>
        </div>

        <div class="d-flex gap-3 justify-content-center mt-4">
            <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger" title="Sign in with Google">
                <i class="bi bi-google fs-5 text-white"></i>
            </a>
            <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue" title="Sign in with Facebook">
                <i class="bi bi-facebook fs-5 text-white"></i>
            </a>
            <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info" title="Sign in with LinkedIn">
                <i class="bi bi-linkedin fs-5 text-white"></i>
            </a>
            <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal" title="Sign in with GitHub">
                <i class="bi bi-github fs-5 text-white"></i>
            </a>
        </div>
    </div> <!-- End of container -->
</form>





    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>
  
  </body>
</html>