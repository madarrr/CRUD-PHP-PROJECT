<?php
include('config/app.php');
include_once('conntrollers/RegisterController.php');

if(isset($_POST['register_btn']))
{
    $name  = validateInput($db->conn, $_POST['name']);
    $surname  = validateInput($db->conn, $_POST['surname']);
    $email   = validateInput($db->conn, $_POST['email']);
    $password   = validateInput($db->conn, $_POST['password']);
    $confirm_password  = validate($db->conn, $_POST['confirm_password']);

 $register =   new RegisterController;
}

?>