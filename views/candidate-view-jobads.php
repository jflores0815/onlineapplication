<?php
session_start();
date_default_timezone_set('Asia/Manila');
if(!isset($_SESSION["username"])):


	header("Location:login.php");

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
    <title>PCN Promopro Inc. Online Application | View Job Ads</title>

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
               
                       <a class="mail-service">&nbsp; &nbsp; Candidate View Job Ads</a>
            
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



  
 <!-- View Posted Jobs Begin -->
 <div class=""> <!-- register-login-section spad -->
        <div class="container">
            <div class="row">
                <div class=""> <!-- col-lg-6 offset-lg-3 -->
                    <div class="login-form">

<div id="content">
  <div id="content-header">
    </div>
        <div class="container-fluid">  
        
            <div class="row-fluid">
              <div class="span12">
                 <div class="widget-box">
                   <div class="widget-content nopadding">
                      <table class="table table-bordered data-table">
           
        	 
			  
                            <?php
                                
                                include_once'../includes/config2.php';
                                $id=$_GET['id'];
                                $query="SELECT * FROM job_ads where j_id='$id'";
                                $result=mysql_query($query)or die(mysql_error());
                                while ($row=mysql_fetch_array($result)){

                            ?>

                            
<style>
.bordermo {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
  text-align: justify;
  text-justify: inter-word;
}
</style>


                 <div class="borderto">
                        <center><h3 style="font-size: 60px;"><img src="../logo/pcn.jpg" width="250px;"></a></h3></center>
                        <br>
                        <b>Job Title: &nbsp;</b><?php echo $row['position']; ?> <br>
                        <b>Location: &nbsp;</b><?php echo $row['location']; ?> <br>
						<b>Salary: &nbsp;</b> Php <?php echo $row['salary']; ?><br><br>

                 </div>
                        <br>
                        
                 <div class="bordermo">
                 <h5><b>Job Description</b></h5>

                    <br>

                        <?php $bullet_points = explode("\n", $row['description']); ?>

                            <ul>
                            <?php foreach($bullet_points as $bullet_point): ?>
                                <li><?php echo $bullet_point; ?></li>
                            <?php endforeach; ?>
                            </ul>

                                
                            
                        <br>
                        <br>

                        <hr>

                        <br>


                        <h5><b>Qualification</b><br></h5>
                        <br>
                    
                        
                        <?php $bullets = explode("\n", $row['qualification']); ?>

                            <ul>
                            <?php foreach($bullets as $bullet): ?>
                                <li><?php echo $bullet; ?></li>
                            <?php endforeach; ?>
                            </ul>

                            <br>
                            <br>

                            <hr>

                            <br>

                            <h5><b>Company Overview</b><br></h5>

                            <br>

                            We are pioneer in the promotions marketing industry, services on below-the-line activities. services we offered: merchandising, promotions & activations, drp box management, market research & audit,  events marketing, creative design & production. We have a strong network of 96 100+ regular employees and 5000 field people nationwide.
                            
                            <br>
                            <br>

                            <h5>Additional Company Information</h5>
                            <br>
                            
                            <b>Company Size</b> <br>
                            2001 - 5000 Employees

                            <br>
                            <br>

                            <b>Industry</b> <br>
                            Advertising / Marketing / Promotion / PR

                            <br>
                            <br>

                            <b>Average Processing Time</b> <br>
                            23 Days

                            <br>
                            <br>

                            <b>Benefits & Others</b> <br>
                            Regular hours, Mondays - Fridays, to be discussed, smart casual

                            <br>
                            <br>



                           

                        


                        <br>
                                        <center>
                        <a><button type="submit" class="btn btn-primary" name="apply" data-toggle="modal" data-target="#paymentModal<?php echo $id; ?>">Apply</button></a>
                        <a href="candidate-jobads.php"><button type="submit" class="btn btn-primary" name="back">Back</button></a>

                        
                        </center>
                 </div>

                 
							
					
						 
					  	

                          </div>
                        </div>
                      </div>
                    </div>

                     </center>
					
						

                	  <?php

						}?>
                        
         
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
    <!-- View Posted Jobs End -->
 

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
        

    <!-- Apply Modal Begin -->

 <div class="modal fade" id="paymentModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true" data-backdrop="false">
	                      <div class="modal-dialog" role="document">
	                        <div class="modal-content">
	                          <div class="modal-header">

	                            <h5 class="modal-title" id="paymentModalLabel"><i class="icon-edit"> </i>Job Details</h5>

	                          </div>

	                        <div class="modal-body">

	                          <p style="margin-left: 0px;" class="note">

                              <b>IMPORTANT SECURITY NOTICE: </b><br>
PCN Promopro Inc. Is not requiring you to make payment for application or processing, or are too good to be true.<br/>

	                          </p>

	                          <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">

					

								<div class="well">
                                  
<style>
.borderto {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: justify;
  text-justify: inter-word;
}
</style>

                                        <?php
                                            
                                            include_once'../includes/config2.php';
                                            $idmo=$_GET['id'];

                                            $query="SELECT * FROM job_ads WHERE j_id='$idmo'";
                                            $result=mysql_query($query)or die(mysql_error());
                                            while ($row2=mysql_fetch_array($result)){

                                        ?>

                                        
                                        <div class="borderto">
                                                <center><h3 style="font-size: 60px;"><img src="../logo/pcn.jpg" width="250px;"></a></h3></center>
                                                <br>
                                                <b>Job Title: &nbsp;</b><?php echo $row2['position']; ?> <br>
                                                <b>Location: &nbsp;</b><?php echo $row2['location']; ?> <br>
                                                <b>Salary: &nbsp;</b> Php <?php echo $row2['salary']; ?><br><br>

                                          





                                        </div>

                                        <?php

                                            }?>




                                    <br>

									<label for="image"><b>Submit your CV: </b></label><br/>


<style>
.texto {
 text-align: justify;
 text-justify: inter-word;
 font-size: 10.5px;

}
</style>

<div class="texto">

      <li> Your file must be in <b>Zip (.zip)</b>, <b>Word (.doc or .docx)</b>, <b>Text (.txt)</b>, <b>Rich Text (.rtf)</b> or <b>PDF (.pdf)</b> format.</li>
       <br>
      <li> File size must not exceed <b>1MB.</b> </li>
</div>

                                    <br>

									<input class="form-control" accept="all files" type="file" name="myfile" required>

									<br/><br/><br/>

									<button class="btn btn-block btn-primary" type="submit" name="btn-submit" value = "<?php echo $idmo ?>">Submit</button>

                                    <button class="btn btn-block" type="button" data-dismiss="modal">Cancel</button>

	                              </form>
								</div>
	                        </div>

	                        </div>
	                      </div>
	                    </div>

    <!-- Apply Modal End -->

    


<!-- ================================= SUBMIT CV BEGIN ==================================== -->

<?php

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'ola2');



                                            




// Uploads files
if (isset($_POST['btn-submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    
  
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../candidates_cv/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server

    $username = $_SESSION["username"];
    $query = "SELECT * FROM tbl_candidates WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
    $candidate_id = $row['id'];
    $email = $row['email'];
    $lname = $row['last_name'];
    $fname = $row['first_name'];
    $sname = $row['suffix'];
    $category = $_POST['btn-submit'];
    $candidate_status = 1;
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $date = date("Y-m-d H:i:s a");

    if (!in_array($extension, ['zip', 'pdf' , 'txt' , 'rtf' , 'doc' , 'docx'])) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Your file must be in Zip (.zip) , Word (.doc or .docx) , Text (.txt) , Rich Text (.rtf) or PDF (.pdf) format.')
	window.location.href='candidate-jobads.php'
	</SCRIPT>");
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('File too large!. File size must not exceed 1MB.')
	window.location.href='candidate-jobads.php'
	</SCRIPT>");
    }
      elseif (preg_match("()'/^[\p{L}\p{N}]+$/u'", $myfile))
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invalid Characters!')
        window.location.href='candidate-jobads.php'
        </SCRIPT>");
    }
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT into candidate_resume

            (candidate_id,
             job_id,
             candidate_last_name,
             candidate_first_name,
             candidate_suffix,
             candidate_email,
             candidate_file_name,
             date_submit,
             file_size,
             candidate_resume,
             status)

          VALUES

              ('$candidate_id',
               '$category',
               '$lname',
               '$fname',
               '$sname',
               '$email',
               '$filename',
               '$date',
               '$size',
               '$destination',
               '$candidate_status');";
                
            if (mysqli_query($conn, $sql)) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('File Upload Successfully.')
	window.location.href='candidate-jobads.php'
	</SCRIPT>");
            }
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Upload File.')
	window.location.href='candidate-jobads.php'
	</SCRIPT>");
        }
    }
}


?>



<!-- ================================= SUBMIT CV END ==================================== -->

				
        
    
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