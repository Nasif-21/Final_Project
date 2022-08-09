<?php
session_start();
require ('../Model/UserModel.php');
if(isset($_POST['btnclick']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    if($username !=null && $password !=null){
    $status=Login($username,$password);
    if($status)
    {
        echo '<script type="text/Javascript">
        alert("Successful Login");
        </script>';
        $_SESSION['uname'] = $username;
        header("Location:../View/Ppage.php");
        
    }
    else
    {
        echo '<script type="text/Javascript">
        alert("Invalid data Inserted");
        </script>';
    }
}
}

?>