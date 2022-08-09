<?php
session_start();
 "../Model/Infor.json";
 "../Model/LogIn.php";
 //include ("../View/Login.php");
//include "../Controller/mstspolicy.php";
//include "";

//echo $json['Login'][0]['user'];
?>
<div style=" background-image:url('Ppic3.jpg');height:auto;">
<?php echo  "<center><h1> Welcome ".$_SESSION['uname']."</h1></center>";

 ?>
<center><h3 style="">Lets know what do you want</h3></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<style>
    table,th,tr
    {

        border: 1px solid;
 
}
table
{
    border-collapse: collapse;
  width: 100%
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
td {
  text-align: center;
}
</style>

<table class="center" style="background-image:url(des2.jpg)">

    <tr>
        <td><h2>Book a flight</h2> </td>
        <td><a href="fbook.php">Flight Book</a></td>

</tr>
<tr>
    <td><h2>Cancel a Flight</h2></td>
    <td><a href="fcancel.php">Flight Cancel</a></td>
</tr>
<tr>
    <td><h2>Hazz Flight Booking</h2></td>
    <td><a href="hazz.php">Hazz Flight</a></td>
</tr>
<tr>
    <td><h2>Complain</h2></td>
    <td><a href="complain.php">Complain</a></td>
</tr>
</table>
<div style="background-image:url('end2.jpg'); height: 100px;">
<a href="Aboutus.php">About us</a>
<a href="pol.php">Company Policy</a>
<a href="Aboutus.php">About us</a>
<a href="Aboutus.php">About us</a>

</div>