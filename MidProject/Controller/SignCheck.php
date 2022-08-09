<?php
session_start();
require("../Model/UserModel.php");
if(isset($_POST['btnclick']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $country=$_POST['cntr'];
    $mobileno=$_POST['mno'];

if($username!==null && $password!==null && $email!==null && $email!==null && $country!==null && $mobileno!==null)
{
    $status=Signin($username, $password,$email,$country,$mobileno);
    if($status)
    {
        header('Location../View/LogIn.php');
       
    }
    else{
       header('Location../View/SignIn.php');
    }
}
}
?>