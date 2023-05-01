<?php
include_once'includes/config2.php';

if(isset($_POST['add']))
{
$id=$_POST['idd'];	
$categories=$_POST['categories'];
$position=$_POST['position'];
$location=$_POST['location'];
$description=$_POST['description'];
$qualification=$_POST['qualification'];
$date = date("Y-m-d H:i:s a");
$salary=$_POST['salary'];	
$images=$_POST['images'];	
$oldimage=$_POST['oldimage'];



 $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
                                $image_name = addslashes($_FILES['images']['position']);
                                $image_size = getimagesize($_FILES['images']['tmp_name']);

                                move_uploaded_file($_FILES["images"]["tmp_name"], "../images/" . $_FILES["images"]["position"]);
                              
                                $located = "../images/" . $_FILES["images"]["position"];

if ($located =='../images/') {
	$image=$_POST['oldimage'];
}else{
	$image = "../images/" . $_FILES["images"]["position"];
}


$query="UPDATE job_ads SET category_id='$categories',qualification='$qualification',position='$position' ,description='$description' ,salary='$salary',location='$location' ,image='$image' ,date_post='$date' WHERE id='$id'";
$result=mysql_query($query)or die(mysql_error());




if($result)
{
echo("<script language='javascript'>
window.alert('Edit Successfully')
window.location.href='admin-view-job.php'
</script>
");
}else{
"nothing";
}
}

?>