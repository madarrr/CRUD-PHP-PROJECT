<?php
// define the hostname or ip adress of the mysql server local host means the server is on the same machine where the php script is execute
define('DB_HOST','localhost');
// define db user in localhost environnement
define('DB_USER','root');
// define password for user in local host
define('DB_PASSWORD','');
// define db name 
define('DB_DATABASE','oopdb');

define('SITE_URL','http://localhost/oop-crud-project/');

include_once(__DIR__.'/../models/Dbconnect.php');

$db = new Dbconnect;

function base_url($slug)
{
    echo SITE_URL.$slug;
}
// use to directly escape a data to secure them to usage in sql 
function validateInput($dbconn,$input)
{
return mysqli_real_escape_string($dbconn,$input);
}

?>