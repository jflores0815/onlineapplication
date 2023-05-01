<?php

	session_start();


	echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
if(isset($_SESSION['username'])) :

header("Location:candidate-dashboard.php");

	endif;



?>

<?php
include_once("../includes/config.php");
//load basic functions next so that everything after can use them
include_once("../includes/functions.php");
//later here where we are going to put our class session
include_once("../includes/session.php");
include_once("../includes/member.php");
include_once("../includes/pagination.php");
include_once("../includes/paginsubject.php");
include_once("../includes/roomtype.php");
include_once("../includes/user.php");
include_once("../includes/reserve.php");
//Load Core objects
include_once("includes/database.php");

	if(isset($_POST['login'])){
	$username = $_POST['log_email'];
	$pass  = $_POST['log_pword'];
	
	 if ($username == '' OR $pass == '') {

         	message("Invalid Username and Password!", "error");
         
    } else {
	$user = new User();
	$res = $user->user_login($username, $pass);
		if($res == true){
	
		
				echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert(' Your are Successfully Login.')
	window.location.href='candidate-dashboard.php'
	</SCRIPT>");
		}else{

		echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Username or Password Not Registered! Contact Your administrator.')
	window.location.href='login.php'
	</SCRIPT>");

		}
	}

}
?>
<?php if(!isset($_SESSION['username'])){

			
					
							
							
							}else{ 
redirect(WEB_ROOT ."candidate-dashboard.php");
							
			}
						?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PNC Promopro Inc. Online Application | Login</title>

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
               
                       <a href="../index.php" class="mail-service"> PNC Promopro Inc. Online Application</a>
                    
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

<style>
.borderto {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: justify;
  text-justify: inter-word;
}
</style>  	

    <!-- Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
          <div class ="borderto">
                        <center><h3 style="font-size: 60px;"><img src="../logo/pcn.jpg" width="250px;"></a></h3></center>
                        <form method="POST" action="login.php">
                            <div class="group-input">
                                <label for="username">Username *</label>
                                <input type="username" id="username" name="log_email" placeholder="Enter your Username" required>
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="log_pword" placeholder="Enter your Password" required>
                            </div>
                          
                            <button type="submit" class="site-btn login-btn" name="login">Sign In</button>
                        </form>
                    
                        <div class="switch-login">
                        <p>Don't have an account? <a href="register.php">Sign up</a>.</p>
                        </div>
                        
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

  
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