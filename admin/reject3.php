<?php

include_once("dbConnect.php");

if(isset($_POST['reject3'])) {

    $idco = $_POST['reject3'];

    $statement = "UPDATE candidate_resume a, job_ads b SET a.status = 5 WHERE a.c_id = '$idco' AND b.j_id = a.job_id";
    $query = mysqli_query($conn, $statement);


    if($query) {

        echo "<script type='text/javascript'>";
		echo "alert('Candidate has been rejected');";
		echo "window.location='admin-for-requirements.php'";
		echo "</script>";

    }

}

?>