<?php
error_reporting(0);

$con=mysql_connect('localhost','root','');

if($con){
mysql_select_db("ola2",$con)or die(mysql_error());
}




?>