<head>
<title>PRAETIWA</title></head>
<body bgmeawcolor=>
<table width=100% bgmeawcolor=pink><tr><td>
<span style="font-size:30px;">Hello</span>
</td></tr></table>
<table width=100% bgmeawcolor=#dddddd><tr>
<td><a href='../myweb.php'>home</a></td>
<td><a href='../multi_form.php'>multiple</a></td>
<td><a href='../friend.php'>myfriend</a></td>
<td><a href='../me.php'>about me</a></td>
<td><a href="../logout.php">Logout</a></td>
</tr></table>
<body>
<?php
 session_start();
 if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
 header('Location: ../loginpage.php');exit;
 }
?>




<body>
<style>
@font-face{
font-family:mono;
src:url('mono.ttf');
}
</style>
<pre style="font-family:mono;font-size:20px;">

<?php
for($meawrow=1;$meawrow<=4;$meawrow++) {
	for($meawcol=1;$meawcol<=$meawrow;$meawcol++) {
		echo("*");
	}
	
	for($meawcol=$meawrow;$meawcol>=2;$meawcol--){
		echo($meawcol);
	}
	
	for($meawcol=1;$meawcol<=$meawrow;$meawcol++){
		echo($meawcol);
	}
	
	echo "<br/>";
}
include ('myweb_footer.php');
?>

</pre></body>
