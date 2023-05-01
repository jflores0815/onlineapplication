<?php

require_once("connect.php");
$cn = new connect;

if (isset( $_POST['save_book'] ) ){
	$isbn = $_POST['isbn'];
	$book_name = $_POST['book_name'];
	$book_desc = $_POST['book_desc'];

	$values = array(

		"book_isbn" => $isbn,
		"book_name" => $book_name,
		"book_desc" => $book_desc
	);

	$cn->insert("books", $values);

	echo 1;
}


?>