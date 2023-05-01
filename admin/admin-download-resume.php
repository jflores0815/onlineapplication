<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ola2');

$sql = "SELECT * FROM candidate_resume a, job_ads b WHERE (a.status = '0' OR a.status = '1') AND b.j_id = a.job_id  ORDER by date_submit DESC";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database


    $sql="SELECT * FROM candidate_resume WHERE c_id=$id ";
    $result = mysqli_query($conn, $sql);
    $file = mysqli_fetch_assoc($result);
    $c_reject = $file["c_id"];
    $filepath = '../candidates_cv/' . $file['candidate_file_name'];


    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../candidates_cv/' . $file['candidate_file_name']));
        readfile('../candidates_cv/' . $file['candidate_file_name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE candidate_resume SET downloads=$newCount WHERE c_id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>