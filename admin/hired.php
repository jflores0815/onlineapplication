<?php

include_once("dbConnect.php");

if(isset($_POST['hired'])) {

    $idmo = $_POST['hired'];

    $statement = "UPDATE candidate_resume a, job_ads b SET a.status = 4 WHERE a.c_id = '$idmo' AND b.id = a.job_id";
    $query = mysqli_query($conn, $statement);


    if($query) {

        echo "<script type='text/javascript'>";
		echo "alert('Hired Candidate Successfully!');";
		echo "window.location='admin-for-requirements.php'";
		echo "</script>";

    }

}

?>