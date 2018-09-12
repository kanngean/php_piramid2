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
for($meawrow=1;$meawrow<=5;$meawrow++) {
	for($meawcol=1;$meawcol<=8-$meawrow;$meawcol++) {
		echo($meawcol);	
	}

	for($meawcol=1;$meawcol<=2+$meawrow;$meawcol++) {
		echo("*");	
	}
	
	echo($meawrow+2);

	echo "<br/>";
}
?>

</pre></body>