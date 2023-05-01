<?php
include_once'includes/config2.php';

if(isset($_POST['delete'])){

$id=$_GET['id'];
$query="DELETE FROM job_ads where j_id=$id";
$result=mysql_query($query)or die(mysql_error());

if ($result)
			{

	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Deleted successfully')
	window.location.href='admin-view-job.php'
	</SCRIPT>");

			
			
			
			}
		else
		echo "not inserted";	
		
}

?>