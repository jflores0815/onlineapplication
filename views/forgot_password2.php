<?php



  session_start();

	echo


	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: text/html'); 
 
 
  if(isset($_SESSION['username'])) :
      
 // header("Location:forgot_password.php");

  endif;


?>



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
    <script src="../js/passchecker.js"></script>
</head>

<link rel="icon" type="image/png" sizes="128x128" href="../logo/pcn.jpg">





<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">PCN Promopro Inc. Candidate Forgot Password</div>
      <div class="card-body">

        <form method="POST" action="forgot_password2.php">
         <a href=""> <?php echo "Email: ". $_SESSION["username"]; ?> </a>
        <div id="user"></div>
          <div class="form-group">

              <br/>

            <span>Enter New Password</span>
            <input name="pass" class="form-control"  id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" type="password" placeholder="Enter New Password" required>

   
          
	 <td>
      <div id="ppbar" title="Strength"><div id="pbar"></div></div>
      <div id="ppbartxt"></div>
     </td>

			</br>



            <span>Confirm New Password</span>
            <input name="pass2" class="form-control"  id="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" type="password" placeholder="Enter New Password" required>

          <br/>

          <button name="submit" type="submit" class="btn btn-primary btn-block">Submit</button>
          <br/>
          <br/>

            <center>

							<a href="forgot_exit.php">Back?</a>
            </center>

        </form>

        <div class="text-center">

        </div>
      </div>
    </div>
  </div>
  
  
  <style>
  input{
   border:none;
   padding:8px;
  }
  #ppbar{
   background:#CCC;
   width:300px;
   height:15px;
   margin:5px;
  }
  #pbar{
   margin:0px;
   width:0px;
   background:pink;
   height: 100%;
  }
  #ppbartxt{
   text-align:right;
   margin:2px;
  }
  </style>

<?php




include_once("../include/dbConnect.php");


	if (isset($_POST["submit"])) {







		$email = $_SESSION["username"];
		$pass = $_POST["pass"];
		$pass2 = $_POST["pass2"];
		
       if (strlen($pass)<6)
		{
		    echo "<script ='text/javascript'>";
			echo "alert('Password must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters!');";
        	echo "window.location.href = 'forgot_password2.php';";
        	echo "</script/>";
		}

		 if ($pass!=$pass2) 
		{
		    echo "<script ='text/javascript'>";
			echo "alert('Password Does not Match!');";
        	echo "window.location.href = 'forgot_password2.php';";
        	echo "</script/>";
		}
	

//check new pass
		if ($pass==$pass2)
		{
		//success
		//change pass in db
		

	

	
		
				$newpassword = "UPDATE tbl_candidates



							  SET



							  	password = '$pass'



							  WHERE



							  	email = '$email'";

				
		if (mysqli_query($conn, $newpassword)) {

			echo "<script type='text/javascript'>";
			echo "alert('Change Password Updated!');";
			echo "window.location='home.php'";
			echo "</script>";



		} else {
		    
		    echo "<script ='text/javascript'>";
			echo "alert('Password Does not Match!');";
        	echo "window.location.href = 'forgot_password2.php';";
        	echo "</script/>";
		}

	}

}


?>

</body>

</html>


