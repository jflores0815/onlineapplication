<?php

defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define our database server
defined('DB_USER') ? null : define("DB_USER","root");		  //define our database user	
defined('DB_PASS') ? null : define("DB_PASS","");			  //define our database Password	
defined('DB_NAME') ? null : define("DB_NAME","ola2"); //define our database Name
error_reporting(0);


$thisFile = str_replace('\\', '/', __FILE__);
$docRoot =$_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'includes/config.php'), '', $thisFile);
$srvRoot  = str_replace('config/config.php','', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
?>