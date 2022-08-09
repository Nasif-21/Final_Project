<?php

?>

<h1>Welcome to flight booking</h1>
<button id="load">Search</button>
<div id="main">
	</div>
<script src="jquery.js"></script>
<script>

    $(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"../Controller/fbookdb.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
    </script>
<form action="#" method=post>
<br><br>
Plane Name<input type=text id="pname" ><br><br>
ID<input type=text id="pid" ><br><br>
Time<input type="text" id="tm"><br><br>
Number of seats<input type="text" id="ns"><br><br>
Gate<input type=text id="gte" ><br><br>
<input type=submit name=btnClick value="Book">
	</form>
<?php

//if($_POST["pname"]!="" &&$_POST["pid"]!=""&&$_POST["tm"]!=""&& $_POST["ns"]!="" && $_POST["gte"]!="" )
//{



$servername="localhost";
$username="root";
$password="";
$dbname="Flight";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//echo "Successful connection";
	$q='UPDATE fbo set Plane Name="'.$_POST["Plane Name"].'", ID="'.$_POST["ID"].'", Seat Availability="'.$_POST["Seat Availability"].'",Time="'.$_POST["Time"].'" where Gate="'.$_POST["Gate"].'"';
	$conn->query($q);
	
	$q="SELECT * from fbo";
	$result=$conn->query($q);
	$output='<table border="1" width=100%><tr><th>id</th><th>Name</th><th>Email</th><th>Address</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["Plane Name"]}</td><td>{$row["ID"]}</td><td>{$row["Seat Availability"]}</td><td>{$row["Gate"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "O results";
	
	
 }
 /*$_SESSION["pname"] = $_POST["pname"];
$_SESSION["pid"] = $_POST["pid"];
$_SESSION["tm"] = $_POST["tm"];
$_SESSION["ns"] = $_POST["ns"];
$_SESSION["gte"] =$_POST["gte"];
*/
//header("Location:agriculturist profile.php");
//}
$conn->close();
echo $output;

?>