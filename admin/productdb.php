<?php
include_once 'includes/config2.php';

if(isset($_POST['add']))
{
$categories=$_POST['categories'];
$qualification=$_POST['qualification'];
$position=$_POST['position'];
$location=$_POST['location'];
$salary=$_POST['salary'];
$description=$_POST['description'];
$date = date("Y-m-d H:i:s a");




    date_default_timezone_set('Asia/Manila');
        
            $timezone = date('Y/m/d H:i:s');
            
            $action = "Add Job";
            $page = "Job Job";
            $id = $_SESSION['admin_id'];
            $user = $_POST['user'];
        

 $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
                                $image_name = addslashes($_FILES['images']['name']);
                                $image_size = getimagesize($_FILES['images']['tmp_name']);

                                move_uploaded_file($_FILES["images"]["tmp_name"], "../images/" . $_FILES["images"]["name"]);
                              
                                $located = "../images/" . $_FILES["images"]["name"];

                 
                             
$query25="INSERT INTO job_ads values('','$categories','$qualification','$position','$description','$salary','$location','$located','$date')";
$result25=mysql_query($query25)or die(mysql_error());


$query2="INSERT into audittrail(user_id,audit_user,audit_action,audit_page,a_date) VALUES ('$id','$user','$action','$page','$timezone')";
$result=mysql_query($query2)or die(mysql_error());

if($result)
{
echo("<script language='javascript'>
window.alert('Added Successfully')
window.location.href='admin-view-job.php'
</script>
");
}else{
"nothing";
}
}

?>