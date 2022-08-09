<?php
//include ("../Model/Hazzdb.php");
$servername="localhost";
$username="root";
$password="";
$dbname="Flight";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}
else
{
    
    $q="select* from fbo";
    $result=$con->query($q);
    
    if($result->num_rows>0){
        echo "<table>";    
        echo "
        <th>Plane name:</th>
        <th>ID:</th>
        <th>Seat Availablity:</th>
        <th>Time:</th>
        <th>Gate:</th>";
        while($row=$result->fetch_assoc()){
        
          
    echo "<tr>";
    echo '<td>'. $row['Plane Name']. '</td>';
    echo "<td>"; echo $row["ID"]; echo"</td>";
    echo "<td>"; echo $row["Seat Availability"]; echo"</td>";
    echo "<td>"; echo$row["Time"];echo"</td>";
    echo "<td>"; echo $row["Gate"];echo"</td>";
    echo "</tr>";
   
    
    
    
    }
    echo "</table>";
    
}


    
   // echo "<script>alert("Complain filed");</script>";
    else{
    echo "Data not posted";
		
    }
        

}
$con->close();
?>