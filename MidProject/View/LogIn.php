<?php
include "../Controller/Logincheck.php";
/*$username=$password="";
//$nameErr=$passwordErr="";
if (isset($_SESSION["btnclick"])) {
    $error = false;
    if (empty($_POST['uname'])) {
      $nameErr = "username is required";
      $error = true;
    }
if(empty($_POST['pass']))
{
 $passwordErr = "password is required";
 $error = true;
}
}
//setcookie("uname",$_SESSION["uname"],time()+(86400*2),"/");
*/
?>

<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="Logdes.css">
	</head>
	<body>
<form action="" method="post" onsubmit="return validate()">

<div class="Title">
   <h1>Welcome at MSTS Airlines</h1>
   <p>Lets begin a wonderful journy with our company</br>
   <h2><b>Log in </b>
</div>
   <br>

    <label>Username :<span>*</span></label>

<input type="text" id="uname" name="uname"><br><br>
<i class="fa-solid fa-circle-check"></i>
<i class="fa-solid fa-circle-exclamation"></i>
<small class="error">Error Username</small>



    <br>

    <label>Pasword :<span>*</span></label>
    <input type="password" id="pass" name="pass"><br>
    <i class="fa-solid fa-circle-check"></i>
    <i class="fa-solid fa-circle-exclamation"></i>
    <small class="error">Error Password</small>


<br>
<br>
<center><button type="submit"  name="btnclick">LOGIN</button></center><br>

<center><button type="submit"  name="btnclick2" >HOME</button></center><br><br><br><br>
<center><p style= "font-size:20px; color:white;"><b>No account?   </b><a href="SignIn.php">Sign in </a> to get touch with us</p></center>



</div>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</form>
<script>
    function validate()
    {
        var username=document.getElementById('uname');
        var password=document.getElementById('pass');
        if(username.value==""||password.value=="")
        {
            alert("Fill up username or password");
            return false;
        }
    }
    </script>
</body>
