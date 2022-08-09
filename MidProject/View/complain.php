<?php
session_start();
//include "../Model/CplDb.php";
include "../Controller/CplVal.php";

?>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="Complain.css">
</head>
<body>
<div class ="container">

<div class ="head">
<h1>Welcome to complain page</h1>
<h2>Write down your problem</h2>
</div>
<form action="../Model/CplDb.php" id="form" method="post" onsubmit="return validate()">

<div class="form-control" id="form-control">
<center><input type=text id="cpl" placeholder="Write down your issue"></center><br><br>
</div>
<div class="btn">
<center><button type="Submit">Click</button></center>
</div>
<br>
<br>

</form>
</div>
</body>
