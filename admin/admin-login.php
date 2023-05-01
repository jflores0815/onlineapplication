<?php
include 'includes/initialize.php';

	if(isset($_POST['login'])){
	$username = $_POST['log_email'];
	$pass  = $_POST['log_pword'];
	
	 if ($username == '' OR $pass == '') {

         	message("Invalid Username and Password!", "error");
         
    } else {
	$guest = new Guest();
	$res = $guest->guest_login($username, $pass);
		if($res == true){
	
		
				echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert(' Your are Successfully Login.')
	window.location.href='admin-dashboard.php'
	</SCRIPT>");
		}else{

		echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Username or Password Not Registered! Contact Your administrator.')
	window.location.href='admin-login.php'
	</SCRIPT>");

		}
	}

}
?>
<?php if(!isset($_SESSION['admin_id'])){

			
					
							
							
							}else{ 
redirect(WEB_ROOT ."admin-dashboard.php");
							
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
    <title>Admin | Login</title>

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
               
                       <a href="admin-login.php" class="mail-service"> PNC Promopro Inc. Online Application</a>
                    
               
                   
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
                        <form method="POST" action="admin-login.php">
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