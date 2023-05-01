<?php



	



	define ("DB_USER", "root");
	define ("DB_PASSWORD", "");
	define ("DB_DATABASE", "sos2");
	define ("DB_HOST", "localhost");

	if (isset($_GET['term'])){

	    $return_arr = array();

	    try {

            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('SELECT products.name FROM products WHERE name LIKE :term');
            $stmt->execute(array('term' => '%'.$_GET['term'].'%'));

            while($row = $stmt->fetch()) {

              $return_arr[] =  $row['name'];

            }



	    } 
        catch(PDOException $e) {

        echo 'ERROR: ' . $e->getMessage();

    }


    /* Toss back results as json encoded array. */

    echo json_encode($return_arr);

}


?>