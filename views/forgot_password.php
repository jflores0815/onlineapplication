<?php

  session_start();

	echo

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: text/html'); 
  if(isset($_SESSION['username'])) :
  header("Location:forgot_password2.php");

  endif;

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PNC Promopro Inc. Online Application | Forgot Password</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<link rel="icon" type="image/png" sizes="128x128" href="../logo/pcn.jpg">

<body class="bg-dark">

  <div class="container">

    <div class="card card-login mx-auto mt-5">

      <div class="card-header">PCN Promopro Inc. Candidate Forgot Password</div>


      <div class="card-body">


        <form method="POST" action="forgot_password.php">

          <div class="form-group">

            <label for="inputEmail">Enter Your Email</label>

            <input name="email" class="form-control" id="inputEmail" type="email" placeholder="Enter Email" required>

          </div>


          <button name="login" type="submit" class="btn btn-primary btn-block">Submit</button>

          <br/>

          <br/>

            <center>

							<a href="login.php"> Go Back?</a>

            </center>

        </form>


        <div class="text-center">



        </div>

      </div>

    </div>

  </div>

</body>


</html>



<?php


if (isset($_POST["login"])) {


       echo "<script type='text/javascript'>";

          echo "alert('Please Check your Email on how to retrive your password!');";

          echo "window.location='login.php'";

          echo "</script>";




      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "ola2";


      $con = mysqli_connect($host,$user,$password, $database);

      mysqli_select_db($con, $database);


      if(!$con )

      {


        die('Could not connect: ' . mysqli_error($con));


      }

      require_once '../controller/forgot_db_functions.php';

      $db = new DB_Functions();

      // receiving the post params

      $email = $_POST['email'];

      // get the user by email and password

      $user = $db->getLoginDetails($email);



        if ($user != false) {


          $_SESSION["user"] = $email;


          ?>


          <script type="text/javascript">

            window.location.href = 'forgot_password2.php';

          </script>

          <?php


        } else if ($user == false) {

          echo "<script type='text/javascript'>";
          echo "alert('Invalid!');";
          echo "window.location='forgot_password.php'";
          echo "</script>";

        }

    }

?>