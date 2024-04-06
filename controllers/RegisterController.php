<?php
//include('config/app.php');

class RegisterController
{
    public function __construct()
    {
        $db = new Dbconnect;
        $this->conn = $db->conn;

    }

    public function registration($nom,$surname,$email,$password)
    {
         $register_query = "INSERT INTO users (nom,surname,email,password) VALUES ('$nom', '$surname', '$email', '$password')";
         $result =$this->conn->query($register_query);
         return $result;
    }

    public function isUserExist($email)
    {
        $checkUser = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if($result->num_rows>0)
        {
            return true;
        }else{
            return false;
        }
    }
    public function confirmPassword($password,$confirm_password)
    {
        if($password == $confirm_password)
        {
              return true;
        }else{
            return false;
        }
    }
     
}


?>