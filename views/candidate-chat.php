<?php



session_start();


date_default_timezone_set('Asia/Manila');


if(!isset($_SESSION["user"])) :


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
    <title>PCN Promopro Inc. Online Application | Dashboard</title>

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
               
                       <a class="mail-service">&nbsp; &nbsp; PCN Chatbox</a>
            
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



 <!-- Chat Section Begin -->
 <style>
.bordermo {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

 <div class=""> <!-- register-login-section spad -->
        <div class="container">
            <div class=""> <!-- row -->
                <div class=""> <!-- col-lg-6 offset-lg-3 -->
                    <div class="login-form">

                                        <div class="bordermo">

                                            <ul class="list-unstyled list-justify">

 <div class="custom-tabs-line tabs-line-bottom left-aligned">
								    
							

									<ul class="nav" role="tablist">
									    
									    	    <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">MESSAGES</a></li>

										
									</ul>

								</div>

								

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="chatbox-history">

  					<div class="table-responsive" id="messages">


													<?php

									
												// connects to the database
												
												
												
											include_once'../includes/config3.php';
												$query = "SELECT * FROM messages WHERE receiver = '".$_SESSION['user']."'  ORDER BY id ASC";
												if($result = $mysqli->query($query))
												    
												
												{
													while($row = $result->fetch_assoc()){
														$sender=$row['sender'];
														if($sender == "PCN"){
													echo "	
												<p> <br/><span style='color:red;'>Admin</span> : ".$row['message']." <br/>
												".$row['time']."</p>
												";
														}else{
													echo "	
												<p '> <br/>me : ".$row['message']." <br/>
												".$row['time']."</p>
												";		
														}
														


													}
												$result->free();
											}else{
												echo "No results found";
											}

											?>




							</div>
						 </div>
<script type="text/javascript">
        $('#messages').scrollTop($('#messages')[0].scrollHeight);
    </script>		
    
    <div class="support-right">

			
		<form action='candidate-chat.php' method='POST'>
		<table>
			<tbody>

				</div>
				<br/>
				<tr>
					<td><textarea cols="78" rows="4" value="Type a message..." name="message" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Type a message...';}">Type a message...</textarea>

				</tr>
				<tr>
					<td><input type='submit' class="btn btn-primary" value='Send Message to admin' name='submit' /></td>
				</tr>
			</tbody>
		</table>
		</form>


		<?php
	include_once'../includes/config3.php';
	if (isSet($_POST['submit'])) {
		if (isSet($_POST['message']) && $_POST['message'] != '') {
			$receiver = $_POST['receiver'];
			$message = $_POST['message'];
			$candidate_id = $idd;
			$time=date('G:i', strtotime($row["time"]));
			$q = mysqli_query($con, "INSERT INTO messages (candidate_id, sender, receiver, message, sendto_id) VALUES ('$_SESSION[user_id]','$_SESSION[user]', '$_SESSION[user]', '$message', '0')") or die(mysql_error());
	 		if ($q) { 

		    echo "<script ='text/javascript'>";
			echo "alert('Message Sent!');";
			echo "window.location.href = 'candidate-chat.php';";
			echo "</script/>";
			
					

			}else
		    echo "<script ='text/javascript'>";
			echo "alert('Failed to Send Message!');";
        	echo "window.location.href = 'candidate-chat.php';";
        	echo "</script/>";
				http_redirect('candidate-chat.php', [], TRUE);
		}
	}
?>


								
								
								</div>

								

								<!-- END TABBED CONTENT -->


                                </div>
                </div>
            </div>
        </div>
    </div>
           
    <!-- Chat Section End -->
 

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