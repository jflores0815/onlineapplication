<?php
require("includes/config.php");
//load basic functions next so that everything after can use them
require("includes/functions.php");
//later here where we are going to put our class session
require("includes/session.php");	
require("includes/member.php");
require("includes/pagination.php");
require("includes/paginsubject.php");
require("includes/roomtype.php");
require("includes/guest.php");
require("includes/reserve.php");
//Load Core objects
require_once("includes/database.php");
?>

<?php include 'admin-download-resume.php';?>

<?php if(isset($_SESSION['admin_id'])){

			
					
							
							
							}else{ 
redirect(WEB_ROOT ."admin-login.php");
							
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
    <title>Admin | New Applied Candidates</title>

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
               
                       <a class="mail-service">&nbsp; &nbsp; Admin New Applied Candidates</a>
            
                </div>

                <div class="ht-right">
                    <a href="admin-logout.php" title="Logout" class="login-panel"><i class="fa fa-user"></i>Logout</a>

                    
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
                        <li><a href="admin-dashboard.php">Dashoard</a></li>
                        <li><a>Job Ads</a>
                            <ul class="dropdown">
                                <li><a href="admin-view-job.php">View Job Ads</a></li>
                                <li><a href="admin-post-job.php">Post Jobs Ads</a></li>
                            </ul>
                        </li>
                        <li><a>Candidate Status</a>
                            <ul class="dropdown">
                                <li><a href="admin-new-applied.php">New Applied Candidates</a></li>
                                <li><a href="admin-for-interview.php">For Interview Candidates</a></li>
                                <li><a href="admin-for-requirements.php">For Requirements Candidates</a></li>
                                <li><a href="admin-hired.php">Hired Candidates</a></li>
                                <li><a href="admin-rejected.php">Rejected Candidates</a></li>
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
                        <th><center>Details of Newly Applied Candidates</center></th>
						<th><center>Action</center></th>
					    </tr>
				         </thead>  
                
                <tbody>
                
                
              
                <?php foreach ($files as $file):?> 
                    
                    <tr>    
						<td>
                        <b>Candidate Name: &nbsp;</b><?php echo $file['candidate_last_name']; ?> , <?php echo $file['candidate_first_name']; ?> <?php echo $file['candidate_suffix']; ?><br/>
						<b>Date Submitted: &nbsp;</b><?php echo $file['date_submit']; ?><br/>
                        <b>Position Applying: &nbsp;</b><?php echo $file['position']; ?><br/>
						<b>Assignment Location: &nbsp;</b><?php echo $file['location']; ?><br/>
                        <b>Salary: &nbsp;</b><?php echo $file['salary']; ?><br/>
                        </td>



 <style>
a:link {
    color:#FFFFFF;
}
 </style>             
              
						<td class="center">
                        <center>
                    
							  <button type="submit" name="" class="btn btn-success"  style="width: 170px;"><a  href="admin-download-resume.php?file_id=<?php echo $file['c_id'] ?>"> Download Resume</a></button>
						
						
					

                         <br>
                         <br>
						

                  
							  <button style="width: 170px;" class="btn btn-primary" data-toggle="modal" data-target="#scheduleCandidate<?php echo $file['c_id'] ?>">Schedule Interview</button>
						
						
					

                         <br>

                         
                         <br>
                         <button style="width: 170px;" class="btn btn-danger" data-toggle="modal" data-target="#rejectCandidate<?php echo $file['c_id'] ?>"> Reject Candidate </button>
						
		
                         <br>

                          </div>
                        </div>
                      </div>
                    </div>

                     </center>
			
              
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

 <!-- Schedule Modal Begin -->

 <div class="modal fade" id="scheduleCandidate<?php echo $file['c_id'] ?>"  role="dialog" >

<div class="modal-dialog" role="document">

  <div class="modal-content">

    <div class="modal-header">

      <h5 class="modal-title" id="viewOrderedItemsLabel"><center><b>Schedule Interview for Candidate</b></center></h5>

      <button class="close" type="button" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">×</span>

      </button>

    </div>

  <div class="modal-body">
<center>
      <h6>Input Schedule for this candidate</h6>
        <br/>
      <form method="post" action="schedule.php"> 

          <input type="hidden" name="sched" value="<?php echo $file['c_id'] ?>"/>
          <input type="date" name="date_sched" required>
          <input type="time" name="time_sched" required>

          <br/>
          <br/>

          <button type="submit" class="btn btn-primary">Schedule </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>

      </form>

</center>

      </div>

<div class="modal-footer"> </div>

        </div>

    </div>

</div>

      <!-- Schedule Modal End -->


    <!-- Reject Modal Begin -->

    <div class="modal fade" id="rejectCandidate<?php echo $file['c_id'] ?>"  role="dialog" >

<div class="modal-dialog" role="document">

  <div class="modal-content">

    <div class="modal-header">

      <h5 class="modal-title" id="viewOrderedItemsLabel"><center><b>Reject Candidate</b></center></h5>

      <button class="close" type="button" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">×</span>

      </button>

    </div>

  <div class="modal-body">
<center>
      <h6>Are you sure you want to reject this candidate?</h6>
        <br/>
      <form method="post" action="reject.php"> 

          <input type="hidden" name="id" value="<?php echo $file['c_id'] ?>"/>


          <button type="submit" class="btn btn-danger">Reject </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>

      </form>
</center>

      </div>

<div class="modal-footer"> </div>

        </div>

    </div>

</div>

      <!-- Reject Modal End -->

                        </td>	
							</tr>
                        
                            <?php endforeach;?>

                </tbody>
                 </table>

 

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