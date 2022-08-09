<?php
include "../Controller/SignCheck.php";
?>
<div style="background-image: url('Ppic.jpg'); height:auto; width:auto;">
    <center> <h1 style="color:rgb(40,29,14);">Welcome Dear Passenger</center>
   <center><p style="color:rgb(78,53,20)"><b>Lets begin a wonderful journy with our company</b></center>
   <center><h2 style="color:rgb(78,53,20)"><b>Log in </b></center>

   <br>

<form action='' method="post">
<center>Username :
<input type="text" id="uname" name="uname" required ></center>
    <br>

    <center>Password :
    <input type="password" id="pass" name="pass"></center><br><br>
    <br>

<center>Email :
<input type="text" id="email" name="email"></center><br><br>
<br><br><br>

<center>Country :
<select name="cntr">
<option value="AFGANISTAN">AFGANISTAN</option>
<option value="AJARBIZAN">AJARBIZAN</option>
<option value="BANGLADESH">BANGLADESH</option>
<option value="CHAINA">CHAINA</option>
<option value="DENMARK">DENMARK</option>
<option value="ENGLAND">ENGLAND</option>
<option value="SWEDEN">SWEDEN</option>
</select><br><br>
<br><br><br>

<center>Mobile No :
<input type="text" id="mno" name="mno"style="height: 30px; width: 300px;"></center><br><br>

<br>
<br>
<center><button type="submit"  name="btnclick" style="background-image:url('sin.jpg'); height: 75px; width: 150px;"></button></center><br>

<center><button type="submit"  name="btnclick2" style="background-image:url('Hp.jpg'); height: 88px; width: 100px;"></button></center><br><br><br><br>



</div>
</form>
