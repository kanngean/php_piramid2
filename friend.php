<head>MYFREIND</head><title>PRAETIWA</title>
<body>
<?php session_start();

if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
header("Location: loginpage.php");exit;
}

include("myweb_header.php");
?>
<a href="myweb.php">home</a><br>
<a href='https://www.facebook.com/profile.php?id=100004456177389'>BOM<img src="bom.jpg" 
width= "160" height="200"></a> 
<?php
include("myweb_footer.php");
?> </body>
