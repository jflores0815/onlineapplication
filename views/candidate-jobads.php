<?php
session_start();
date_default_timezone_set('Asia/Manila');
if(!isset($_SESSION["username"])):


	header("Location:../login.php");

endif;

require_once("../config/dbcontroller.php");
include_once("../include/dbConnect.php");

$db_handle = new DBController();

if(!empty($_GET["action"])) {

switch($_GET["action"]) {


	// reservation of product ( out of stock )

	case "reserve" :

		if ( !empty($_POST["quantity"]) )

		{

				$result = mysqli_query($conn, "SELECT * FROM `reserved`");
				$row_count = $result->num_rows;
				$id = $_SESSION["user_id"];
				$prod_id = $_GET["code"];
				$qty = $_POST["quantity"];
				$trans_no = $id.'-'.$prod_id.'-'.$row_count;
				$res_date = date('Y-m-d H:i:s');
				$query = $conn->query("INSERT INTO `reserved` (`transaction_no`, `reserved_date`, `client_id`,`product_id`,`quantity`,`status`)
				VALUES ('$trans_no', '$res_date', '$id', '$prod_id', '$qty','7')");

				if ( $query === true) {

						echo "<script type='text/javascript'>";
						echo "alert('Item has been Reserved!');";
						echo "window.location='shop.php'";
						echo "</script>";

				}

		}

	break;

	case "add":

		if(!empty($_POST["quantity"])) {

			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'weight'=>$productByCode[0]["weight"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;

								}

								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								echo "<script type='text/javascript'>";
								echo "alert('Item has been added to your shopping bag!');";
								echo "window.location='shop.php'";
								echo "</script>";

							}

					}

				} 
				  else {

					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);

					echo "<script type='text/javascript'>";
					echo "alert('Item has been added to your shopping bag!');";
					echo "window.location='shop.php'";
					echo "</script>";

				}

			} 
			  else {

				$_SESSION["cart_item"] = $itemArray;
				echo "<script type='text/javascript'>";
				echo "alert('Item has been added to your shopping bag!');";
				echo "window.location='shop.php'";
				echo "</script>";

			}

		}

	break;
	case "remove":

		if(!empty($_SESSION["cart_item"])) {

			foreach($_SESSION["cart_item"] as $k => $v) {

					if($_GET["code"] == $k)

						unset($_SESSION["cart_item"][$k]);
						echo "<script type='text/javascript'>";
						echo "alert('Item has been removed from your shopping bag!');";
						echo "window.location='shop.php'";
						echo "</script>";		

					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);

			}

		}

	break;

	case "empty":

		unset($_SESSION["cart_item"]);
		echo "<script type='text/javascript'>";
		echo "alert('Cart emptied');";
		echo "window.location='shop.php'";
		echo "</script>";

	break;

}

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
    <title>PCN Promopro Inc. Online Application | Job Ads</title>

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
               
                       <a class="mail-service">&nbsp; &nbsp; Candidate Job Ads</a>
            
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
                   <div class="widget-content nopadding">
                      <table class="table table-bordered data-table">

                      <br>
                  
        	             <thead>
					    <tr>
						    <th><center><b><h3>List of Job Ads</h3></b></center></th>
						    <th><center><b><h3>Action</h3></b></center></th>
					    </tr>
				         </thead>  


                       
                
                <tbody>
			  
				    <?php

				     include_once '../includes/config2.php';
				     $query="SELECT * FROM job_ads ORDER BY date_post DESC";
				     $result=mysql_query($query)or die(mysql_error());
				     while ($row=mysql_fetch_array($result)){
                         

				    ?>
                         

             		<tr>
       
						<td>
                        <center><h3 style="font-size: 60px;"><img src="../logo/pcn.jpg" width="150px;"></a></h3></center>
                        <center><b>Date Posted: &nbsp;</b><?php echo $row['date_post']; ?></center>
                        <center><b>Job Title: &nbsp;</b><?php echo $row['position']; ?></center>
						<center><b>Salary: &nbsp;</b><?php echo $row['salary']; ?></center>
                        <br>
                        </td>
              
							
						<td class="center">
                        <center>
						
						 <form action="candidate-view-jobads.php?id=<?php echo $row['j_id']; ?>" method="POST" >
							  <button type="submit" name="add" class="btn btn-warning "  style="width: 100px;"><i class="icon-edit"></i> View</button>
						
						
					     </form><br>
					  	

                          </div>
                        </div>
                      </div>
                    </div>

                     </center>
						  </td>	
							</tr>

                	  <?php

						}?>
                        
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

    <!-- Data Tables Begin -->
    <script src="../admin/js/jquery.dataTables.min.js"></script> 
    <script src="../admin/js/matrix.tables.js"></script>
    <!-- Data Tables End -->

    <script src="../admin/js/matrix.chat.js"></script> 

    <script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
    <!-- Js Plugins End -->
</body>

</html>