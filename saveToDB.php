<!Doctype html>
<html>
<head>
	<title>Response recorded</title>
	<style>
		#wrapper{
			width:80%;
			margin:auto;
			display:flex;
			flex-direction:column;
		}
		#main{
			margin:auto;
		}
	</style>
</head>
<body>
	<div id="wrapper">
	<div id="main">
	<div>
		<h1>You response has been successfully recorded!</h1>
	</div>
	<div>
		<h2>Go back and refresh the page to view list</h2>
	</div>
	</div>
	</div>
</body>
<?php
	$songName=$_GET['songName'];
	$singerOrBand=$_GET['singerOrBand'];
	$personName=$_GET['personName'];
	$link=$_GET['link'];

	$db_conn=pg_connect("host=localhost user=vrushali password=openpsql dbname=vrushali") or die("Failed");
	$query=pg_query($db_conn,"INSERT INTO songs(name,singerorband,suggestedby,youtubelink) VALUES('$songName','$singerOrBand','$personName','$link')");

//	$fh=fopen("songs.txt","a");
//	chmod($fh,0777);

	//echo"$link";
//	$str=$songName."|".$singerOrBand."|".$personName."|".$link."\n";
	//echo"$str";
//	fwrite($fh,"$str");
//	fclose($fh);

?>

</html>
