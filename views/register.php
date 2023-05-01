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

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PNC Promopro Inc. Online Application | Register</title>

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
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/passchecker.js"></script>
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
           
                   <a href="../index.php" class="mail-service"> PNC Promopro Inc. Online Application </a>
                
           
               
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
                        <a href="login.php"><i class="fa fa-home"></i> Candidate</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

<style>
.borderto {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: justify;
  text-justify: inter-word;
}
</style>

    	<!-- Candidate Registration Begin -->


            <div id="page-wrapper"  class="container">
                <form id="" class="" method="post">
				<div class ="borderto">
				<div class="row">
					<div class="col-lg-12">
                        <br/>
						<h3 class="page-header text-center">Applicant Registration Form</h3>
					</div>

					
											
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="">
															<label><b>Gender :</b></label>
															<label class="radio-inline"><input type="radio" id="gender" name="gender" value="Male" required> Male</label>
                                                            <label class="radio-inline"><input type="radio" id="gender" name="gender" value="Female" required> Female</label>
															<label class="required"></label>
															<p id="gender" class="help-block"></p>
														
														</div>
													</div>
												

					<div class="col-md-12">


                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-perinfo" role="tabpanel" aria-labelledby="nav-perinfo-tab">
                                <div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-12">

										<br>
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
												<div class="row">
													<div class="col-lg-12 cls_headerlabel">
														<label><b><i>Applicant Account:</i></b></label>
													</div>
												</div>
											</div>
										</div>
										<hr>

										<div class="row">
											<div class="col-lg-12">
												<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Username</label>
															<input type="text" id="username" name="username" class="form-control" placeholder="Enter your Username" value="" required> 
													
														</div>
													</div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Password</label>
															<input type="password" id="pass" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control" placeholder="Enter your Password" value="" required>
													
														</div>

													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Re-type Password</label>
															<input type="password" id="pass2" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control" placeholder="Confirm your Password" value="" required>
														
														</div>
													</div>
												</div>
											</div>
										</div>


									<br>
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
												<div class="row">
													<div class="col-lg-12 cls_headerlabel">
														<label><b><i>Personal Information:</i></b></label>
													</div>
												</div>
											</div>
										</div>
										<hr>

												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">First Name</label>
															<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter your First Name" value="" required>
													
														</div>
													</div>

													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Middle Name</label>
															<input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Enter your Middle Name" value="" required>
													
														</div>
													</div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Last Name</label>
															<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your Last Name" value="" required>
														
														</div>
													</div>

                                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label>Suffix (Jr./Sr./III/IV)</label>
															<input type="text" id="suffix" name="suffix" class="form-control" placeholder="Suffix" value="" >
												
														</div>
													</div>

                                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label>Nickname</label>
															<input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nickname" value="" required>
												
														</div>
													</div>
													
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Date of Birth</label>
															<input type="date" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy" required>
														
														</div>
													</div>

													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Place of Birth</label>
															<input type="text" id="place_of_birth" name="place_of_birth" class="form-control" placeholder="Place of Birth" value="" required>
														
														</div>
													</div>

													<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Nationality</label>
															<input type="text" id="nationality" name="nationality" class="form-control" placeholder="Nationality" value="" required>
														
														</div>
													</div>

												</div>
											</div>
										</div>
                                      
										<div class="row">
											<div class="col-lg-12">
												<div class="row">
                                                    
												
													
													
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<div class="form-group">
															<label class="required">Email Address</label>
															<input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email Address" value="" required>
														
														</div>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<div class="form-group">
															<label class="required">Mobile Number</label>
															<input type="tel" id="mobile_number" name="mobile_number" class="form-control" pattern="^\d{11}" placeholder="Enter your Mobile No. : 09xxxxxxxxx" maxlength="13" value="" required>
													
														</div>
													</div>
												
													<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Civil Status</label>
															<select id="civil_status" name="civil_status" class="form-control" required>
																<option value="" title="- Select Status -">- Select Status -</option>
																<option value="Single" title="Single">Single</option>
																<option value="Married" title="Married">Married</option>
																<option value="Divorced" title="Divorced">Divorced</option>
																<option value="Legally Separated" title="Legally Separated">Legally Separated</option>
																<option value="Widowed" title="Widowed">Widowed</option>
															</select>
														
														</div>
													</div>
												</div>
											</div>
										</div>

										<br>
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
												<div class="row">
													<div class="col-lg-12 cls_headerlabel">
														<label><b><i>Full Address:</i></b></label>
													</div>
													
												</div>
											</div>
										</div>
										<hr>
								
										<div class="row">
											<div class="col-lg-12">
												<div class="row">
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Region</label>
															<select id="region" name="region" class="form-control" required>

															<option  disabled selected value required> - Select Region - </option>


						

														

															</select>
														
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Province</label>
															<select id="province" name="province" class="form-control" required>

															<option  disabled selected value required> - Select Province - </option>

													

															</select>
														
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">City</label>
															<select id="city" name="city" class="form-control" required>

															<option  disabled selected value required> - Select City/Municipality - </option>

													

															</select>
													
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Barangay</label>
															<select id="barangay" name="barangay" class="form-control" >

															<option  disabled selected value required> - Select City/Municipality - </option>



															</select>
													
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="row">
													<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
														<div class="form-group">
															<label class="required">House no.</label>
															<input type="text" id="house_no" name="house_no" class="form-control" placeholder="House no." value="" required>
														
														</div>
													</div>
													<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="required">Street</label>
															<input type="text" id="street" name="street" class="form-control" placeholder="Street Name" value="" required>
													
														</div>
													</div>
													<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
														<div class="form-group">
															<label>Zip Code</label>
															<input type="number" id="zip_code" name="zip_code" class="form-control" placeholder="Zip Code" maxlength="4" value="" >
															
														</div>
													</div>
												</div>
											</div>
										</div>
                                
                                     
                                     
										

									
									<div class="row justify-content-right">
											<div class="col-lg-12">
											<hr>
											<center>
												<p>By creating an account you agree to our <a href="">Terms & Privacy</a>.</p>
												<button type="submit" id="submit" name="submit" class="site-btn register-btn">REGISTER</button>
												<div class="">
												<p>Already have an account? <a href="login.php">Sign in</a>.</p>
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
                </form>
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
	background:rgb(37, 138, 37);
	height: 100%;
   }
   #ppbartxt{
	text-align:right;
	margin:2px;
   }
</style>

<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
	<!-- Candidate Registration End -->

  

  
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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
        <!-- script type="text/javascript" src="../jquery.ph-locations.js"></script -->
        <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
        <script type="text/javascript">
            
            var my_handlers = {

                fill_provinces:  function(){

                    var region_code = $(this).val();
                    $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
                    
                },

                fill_cities: function(){

                    var province_code = $(this).val();
                    $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
                },


                fill_barangays: function(){

                    var city_code = $(this).val();
                    $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
                }
            };

            $(function(){
                $('#region').on('change', my_handlers.fill_provinces);
                $('#province').on('change', my_handlers.fill_cities);
                $('#city').on('change', my_handlers.fill_barangays);

                $('#region').ph_locations({'location_type': 'regions'});
                $('#province').ph_locations({'location_type': 'provinces'});
                $('#city').ph_locations({'location_type': 'cities'});
                $('#barangay').ph_locations({'location_type': 'barangays'});

                $('#region').ph_locations('fetch_list');
            });
        </script>
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



	
		
		
       
            $sql="SELECT * from tbl_candidates where (username='$username');";
            

            
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
        
        
								 //CHECK EMAIL
								 $sql_email="SELECT * FROM tbl_candidates WHERE email='$email'";
									$query_email=mysqli_query($conn,$sql_email);
								
								 if (mysqli_num_rows($query_email) >= 1) {
			      echo "<script> alert('Email already exist!'); window.location.href = 'register.php' </script>";
        	http_redirect('./register.php', [], TRUE);
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
			
			//VERIFICATION CODE
			$verification_code = md5("$username$password");

						//region validation
						$sql_reg="SELECT * from refregion WHERE regCode = '$region'";
						$result1 = mysqli_query($conn, $sql_reg);
						$row1 = mysqli_fetch_assoc($result1);
						$region1 = $row1['regDesc'];

							//province validation
							$sql_prov="SELECT * from refprovince WHERE provCode = '$province'";
							$result2 = mysqli_query($conn, $sql_prov);
							$row2 = mysqli_fetch_assoc($result2);
							$province1 = $row2['provDesc'];

									//city validation
									$sql_city="SELECT * from refcitymun WHERE citymunCode = '$city'";
									$result3 = mysqli_query($conn, $sql_city);
									$row3 = mysqli_fetch_assoc($result3);
									$city1 = $row3['citymunDesc'];

										//barangay validation
										$sql_brgy="SELECT * from refbrgy WHERE brgyCode = '$barangay'";
										$result4 = mysqli_query($conn, $sql_brgy);
										$row4 = mysqli_fetch_assoc($result4);
										$barangay1 = $row4['brgyDesc'];

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
											 zip_code,
											 account_status, 
											 verification_code) 
											 
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
													 '$zip_code',
													 '2',
													 '$verification_code');";
		
		
		
		if(mysqli_query($conn, $query)) {
			
			//EMAIL CONFIRMATION
			$to = "<$email>";
			$subject = "Confirm your registration";
			$message = "Hi, \n\nPlease click the following link to confirm your email address. \n\nhttp://ola.sarisarionlineshop.com/views/verify_email.php?verification_code=$verification_code";
            $from = "<olapcnpromopro@ola.sarisarionlineshop.com>";
			$headers = "From: $from";
			mail($to,$subject,$message,$headers);
			
			$_SESSION['SessionSuccessEmail']= "$email";
			
			echo "<script ='text/javascript'>";
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