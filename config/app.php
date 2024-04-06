<?php
// define the hostname or ip adress of the mysql server local host means the server is on the same machine where the php script is execute
define('DB_HOST','localhost');
// define db user in localhost environnement
define('DB_USER','root');
// define password for user in local host
define('DB_PASSWORD','');
// define db name 
define('DB_DATABASE','oopdb');

include_once(__DIR__.'/../models/Dbconnect.php');

$db = new Dbconnect;

?>