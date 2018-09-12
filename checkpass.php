<?php
session_start();
if($_POST["u"] ==  "meaw" && $_POST["p"] == "meaw") 
{
$_SESSION["pass"] = "yes"; 
header("Location:myweb.php");
}else{
header("Location:loginpage.php");
}
?>
