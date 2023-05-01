<?php

include_once("dbConnect.php");

if(isset($_POST['requirements'])) {

    $idmo = $_POST['requirements'];

    $statement = "UPDATE candidate_resume a, job_ads b SET a.status = 3 WHERE a.c_id = '$idmo' AND b.j_id = a.job_id";
    $query = mysqli_query($conn, $statement);


    if($query) {

        echo "<script type='text/javascript'>";
		echo "alert('Candidate has set for requirements');";
		echo "window.location='admin-for-interview.php'";
		echo "</script>";

    }

}

?>