<?php
//session_start();
//include "../View/complain.php";

?>
<head>

<script>
    function validate()
    {
        var complain=document.getElementById('cpl');
        if(complain.value=="")
        {
            alert("Please fill your textbox");
            return false;
        }
        else
        {
          header("Location:../Model/CplDb.php");
          //return true;  
        }

    }
</script>
</head>