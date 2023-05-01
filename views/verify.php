<?php
	session_start();
	echo
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: text/html');
	if(isset($_SESSION['username'])) :
	header("<Location:candidate-dashboard></Location:candidate-dashboard>.php");

	endif;
	
if(isset($_SESSION['SessionSuccessEmail'])){}else{	header("Location:register.php");}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PNC Promopro Inc. Online Application | Verify</title>

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

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

 <!-- Header Section Begin -->
 <header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
           
                   <a href="login.php" class="mail-service"> PNC Promopro Inc. Online Application </a>
                
           
               
            </div>
            <div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <div class="top-social">
                    <a href="https://www.facebook.com/PCNPromopro"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                 
                </div>
                <div class="top-social">
                    Follow us on
                </div>
            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container">
            
  
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="../index.php"><i class="fa fa-home"></i> Candidate</a>
                        <span>Verify</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

<div class="back">
	<center><h2>THANK YOU FOR SIGNING UP!</h2> </center>
</div>

<div class="container">
		<div class="register-form">

<br>

   <center>	<p>We have sent you a confirmation email to <b><?php if(isset($_SESSION['SessionSuccessEmail'])){ echo $_SESSION['SessionSuccessEmail']; } ?></b>.</p>
				<p>Please click on the link to verify your email address.</p></br>
   </center>
					
		   </div>
			</div>
	
 
			
		 <style>
 
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
	
 
			
			
			
			
		
			
 <!-- Footer Section Begin -->

    
 <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> PCN Promopro Inc. Online Application, All rights reserved | This template is made with 
<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Footer Section End -->

<!-- Js Plugins Begin -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/jquery.countdown.min.js"></script>
<script src="../js/jquery.nice-select.min.js"></script>
<script src="../js/jquery.zoom.min.js"></script>
<script src="../js/jquery.dd.min.js"></script>
<script src="../js/jquery.slicknav.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
<!-- Js Plugins End -->
</body>

</html>



<?php
	
	require_once('../include/dbConnect.php');
	
	if(isset($_POST['submit'])) {
		

		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];	
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$suffix = $_POST['suffix'];
		$nickname = $_POST['nickname'];
		$gender = $_POST['gender'];
		$dob = $_POST['date_of_birth'];
		$pob = $_POST['place_of_birth'];
		$nationality = $_POST['nationality'];
		$email = $_POST['email'];
		$mobile_number = $_POST['mobile_number'];
		$civil_status = $_POST['civil_status'];
		$region = $_POST['region'];
		$province = $_POST['province'];
		$city = $_POST['city'];
		$barangay = $_POST['barangay'];
		$house_no = $_POST['house_no'];
		$street = $_POST['street'];
		$zip_code = $_POST['zip_code'];
		
       
            $sql="select * from tbl_candidates where (username='$username');";
            $res=mysqli_query($conn,$sql);
            
            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['username'])
            {
            echo "<script ='text/javascript'>";
			echo "alert('Username already exist!');";
        	echo "window.location.href = 'register.php';";
        	echo "</script/>";
        	http_redirect('register.php', [], TRUE);
            }
     
        }
        
        
		
		       if (strlen($password)<6)
		{
		    echo "<script ='text/javascript'>";
			echo "alert('Password must be atleast 6 characters!');";
        	echo "window.location.href = 'register.php';";
        	echo "</script/>";
        	http_redirect('register.php', [], TRUE);
		}

		       if ($password != $confirm_password) 
		{
		    echo "<script ='text/javascript'>";
			echo "alert('Password Does not Match!');";
        	echo "window.location.href = 'register.php';";
        	echo "</script/>";
        	http_redirect('register.php', [], TRUE);
		}
		
		//check new pass
		if ($pass==$pass2)
		{
		//success
		//change pass in db
		

		              $query = "INSERT INTO tbl_candidates(username,
                                                           password,
                                                           first_name, 
                                                           middle_name, 
                                                           last_name, 
                                                           suffix, 
                                                           nickname, 
                                                           gender, 
                                                           date_of_birth, 
                                                           place_of_birth,
                                                           nationality,
                                                           email,
                                                           mobile_number,
                                                           civil_status,
                                                           region,
                                                           province,
                                                           city,
                                                           barangay,
                                                           house_no,
                                                           street,
                                                           zip_code) 
        
                                                           VALUES ('$username',
                                                                   '$password',
                                                                   '$first_name', 
                                                                   '$middle_name', 
                                                                   '$last_name', 
                                                                   '$suffix', 
                                                                   '$nickname', 
                                                                   '$gender', 
                                                                   '$dob', 
                                                                   '$pob',
                                                                   '$nationality',
                                                                   '$email',
                                                                   '$mobile_number',
                                                                   '$civil_status',
                                                                   '$region1',
                                                                   '$province1',
                                                                   '$city1',
                                                                   '$barangay1',
                                                                   '$house_no',
                                                                   '$street',
                                                                   '$zip_code');";
		
		
		if(mysqli_query($conn, $query)) {
			
			echo "<script ='text/javascript'>";
			echo "alert('Successfully Registered as Member!');";
			echo "window.location.href = 'verify.php';";
			echo "</script/>";
		}
		
		else if ($query != true){
		    
		    echo "<script ='text/javascript'>";
			echo "alert('Incorrect Input!');";
        	echo "window.location.href = 'register.php';";
        	echo "</script/>";
        	http_redirect('register.php', [], TRUE);
		}
	}
	
}

?>