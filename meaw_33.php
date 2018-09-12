<head>
<title>PRAETIWA</title></head>
<body bgor=>
<table width=100% bgor=pink><tr><td>
<span style="font-size:30px;">Hello</span>
</td></tr></table>
<table width=100% bgor=#dddddd><tr>
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
for($=1;$<=3;$++) {
	for($=1;$<=3-$;$++) {
		
		echo(" ");
	}

	for($=1;$<=$;$++){
		echo("*");
	}

	for($=2;$<=$;$++){
		echo("*");
	}

	for($=1;$<=3-$;$++) {
		
		echo(" ");
	}

	echo "<br/>";
}

for($=2;$>=1;$--) {
	for($=1;$<=3-$;$++) {
		echo(" ");
	}
	
	for($=1;$<=$;$++){
		echo("*");
	}
	
	for($=2;$<=$;$++){
		echo("*");
	}

	for($=1;$<=3-$;$++) {
		echo(" ");
	}

	echo "<br/>";
}
include ('myweb_footer.php');
?>

</pre></body>