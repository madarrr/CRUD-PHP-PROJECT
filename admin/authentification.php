<?php
//include('config/app.php');
include_once(__DIR__.'/../controllers/RegisterController.php');

if(isset($_POST['register_btn']))
{
    $name  = validateInput($db->conn, $_POST['nom']);
    $surname  = validateInput($db->conn, $_POST['surname']);
    $email   = validateInput($db->conn, $_POST['email']);
    $password   = validateInput($db->conn, $_POST['password']);
    $confirm_password  = validateInput($db->conn, $_POST['confirm_password']);

 $register =   new RegisterController;
 $result_password = $register->confirmPassword($password,$confirm_password);
 if($result_password)
 {

 }else{
    redirect("password does not match","views/registration.php");
 }
}

?>