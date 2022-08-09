<?php
include("../View/complain.php");
$servername="localhost:3306";
$username="root";
$password="";
$dbname="complain";
$cpl = (isset($_POST['cpl']) ? $_POST['cpl'] : '');
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}
else
{
    
    $q="INSERT Into cplinfo(Issue) VALUES('".$_POST["cpl"]."')";
    $result=$con->query($q);
    if($result){

        header("Location:../View/complain.php");
    
        echo "Complain Filed";
    }
    
    
   // echo "<script>alert("Complain filed");</script>";
    else{
    echo "Data not posted";
		//echo "<script>alert("Complain not filed");</script>";
    }
        
}
$con->close();
?>