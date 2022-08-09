<?php
function Signin($username,$password,$email,$mobileno,$country)
{
//session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="SignIn";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
else
{
    $q="INSERT into sign(Username,password,Email,Mobile,Country) values('".$_POST["uname"]."','".$_POST["pass"]."','".$_POST["email"]."','".$_POST["mno"]."','".$_POST["cntr"]."') ";
    $result=$conn->query($q);
    if($result==TRUE)
	{
		
        echo '<script type="text/Javascript">
        alert("Data Inserted");
        </script>';
			//echo "ID:".$row["ID"]."Name:".$row["Name"]."Email:".$row["Email"]."<br>";
		
	}
	else
	{
        echo '<script type="text/Javascript">
        alert("Data not Inserted");
        </script>';
	}

}


}
function Login($username,$password)
{
    $crdata=file_get_contents('../Model/Infor.json');
    $ar_data=json_decode($crdata,true);
    for($a=0; $a<=sizeof($ar_data);$a++)
    {
        foreach($ar_data[$a] as $key =>$val)
        {
            if($ar_data[$a]['user']==$username && $ar_data[$a]['pw']==$password)
            return true;
        }
    }
}
?>