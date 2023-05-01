<?php



session_start();


date_default_timezone_set('Asia/Manila');


if(!isset($_SESSION["username"])) :


	header("Location:login.php");


endif;

?>

<?php
require("../admin/includes/config.php");
//load basic functions next so that everything after can use them
require("../admin/includes/functions.php");
//later here where we are going to put our class session
require("../admin/includes/session.php");	
require("../admin/includes/member.php");
require("../admin/includes/pagination.php");
require("../admin/includes/paginsubject.php");
require("../admin/includes/roomtype.php");
require("../admin/includes/guest.php");
require("../admin/includes/reserve.php");
//Load Core objects
require_once("../admin/includes/database.php");
?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PCN Promopro Inc. Online Application | Candidate</title>

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
               
                       <a class="mail-service"> PCN Promopro Inc. Online Application </a>
                    
                </div>

                <div class="ht-left">
               
                       <a class="mail-service">&nbsp; &nbsp; Candidate not Suitable Jobs</a>
            
                </div>

                <div class="ht-right">
                    <a href="logout.php" title="Logout" class="login-panel"><i class="fa fa-user"></i>Logout</a>
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

        <br>
        <br>
<center>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="candidate-dashboard.php">Dashoard</a></li>
                        <li><a href="candidate-jobads.php">View Job Ads</a></li>
                        <li><a>My Application Status</a>
                            <ul class="dropdown">
                                <li><a href="candidate-applied.php">Applied Jobs</a></li>
                                <li><a href="candidate-reject.php">Not Suitable Jobs</a></li>
                            </ul>
                        </li>
                        <li><a>Candidate Profile</a>
                            <ul class="dropdown">
                                <li><a href="candidate-profile.php">View Profile</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
</center>
    </header>
    <!-- Header End -->



<!-- View New Applied Candidates Begin -->

<div class=""> <!-- register-login-section spad -->
        <div class="container">
            <div class=""> <!-- row -->
                <div class=""> <!-- col-lg-6 offset-lg-3 -->
                    <div class="login-form">

<div id="content">
  <div id="content-header">
    </div>
        <div class="container-fluid">  
            <div class="row-fluid">
              <div class="span12">
                 <div class="widget-box">

                 <br>

                   <div class="widget-content nopadding">
                      <table class="table table-bordered data-table">
           
        	             <thead>
					    <tr>
                        <th><center>List of not Suitable Jobs</center></th>
						<th><center>Action</center></th>
					    </tr>
				         </thead>  
                
                <tbody>

                <?php

$username = $_SESSION["username"];
$query="SELECT * FROM candidate_resume a, job_ads b, tbl_candidates c WHERE (a.status = '5' AND b.j_id = a.job_id) AND (c.username = '$username' AND c.id = a.candidate_id)  ORDER BY a.date_submit DESC ";
$result=mysql_query($query)or die(mysql_error());
while ($row=mysql_fetch_array($result)){


    

?>

                    
                    <tr>    
						<td>
						<b>Date Submitted: &nbsp;</b><?php echo $row['date_submit']; ?><br/>
                        <b>Position Applying: &nbsp;</b><?php echo $row['position']; ?><br/>
						<b>Assignment Location: &nbsp;</b><?php echo $row['location']; ?><br/>
                        <b>Salary: &nbsp;</b><?php echo $row['salary']; ?><br/>
                        </td>

                         

 <style>
a:link {
    color:#FFFFFF;
}
 </style>             
               
						<td class="center">
                        <center>
                        <br>
                        <form action="candidate-view-reject.php?id=<?php echo $row['j_id']; ?>" method="POST" >
							  <button type="submit" name="add" class="btn btn-warning "  style="width: 100px;"><i class="icon-edit"></i> View</button>
						
						
					     </form><br>


                         <br>


                          </div>
                        </div>
                      </div>
                    </div>

                     </center>
						  </td>	
							</tr>

                            <?php } ?>

                </tbody>
                 </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View New Applied Candidates End -->
 

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