<?php

include_once("dbConnect.php");

if(isset($_POST['id'])) {

    $idmo = $_POST['id'];

    $statement = "UPDATE candidate_resume a, job_ads b SET a.status = 5 WHERE a.c_id = '$idmo' AND b.j_id = a.job_id";
    $query = mysqli_query($conn, $statement);


    if($query) {

        echo "<script type='text/javascript'>";
		echo "alert('Candidate has been rejected');";
		echo "window.location='admin-new-applied.php'";
		echo "</script>";

    }

}

?>