<?php
//database server
define('DB_SERVER', "localhost");

//database login name
define('DB_USER', "root");
//database login password
define('DB_PASS', "");

//database name
define('DB_DATABASE', "patient_monitoring");

require("Database.class.php"); 
$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);  

?>