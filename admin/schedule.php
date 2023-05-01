<?php

include_once("dbConnect.php");

if(isset($_POST['sched'])) {

    $idmo = $_POST['sched'];
    $date_sched = $_POST['date_sched'];
    $time_sched = $_POST['time_sched'];

    $statement = "UPDATE candidate_resume a, job_ads b SET a.date_sched = '$date_sched', a.time_sched = '$time_sched', a.status = 2 WHERE a.c_id = '$idmo' AND b.j_id = a.job_id";
    $query = mysqli_query($conn, $statement);


    if($query) {

        echo "<script type='text/javascript'>";
		echo "alert('Candidate has been scheduled');";
		echo "window.location='admin-new-applied.php'";
		echo "</script>";

    }

}

?>

