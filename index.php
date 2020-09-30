<!Doctype html>
<html>
<head>
	<title>
		Suggest a song!
	</title>
	<style>
		body{
			margin:0px;
			font-family:monospace;
			background-color:black;
		}
		#Wrapper{
			display:flex;
			flex:1;
			flex-direction:column;
			margin:auto;
			overflow:auto;
			width:70%;
			height:100%;
			background-color:blue;
		}
		#Head{
			display:flex;
			flex:1;
			align-content:center;
			background-color:green;
			padding:30px;
			color:white;
		}
		#Input{
			display:flex;
			flex:1;
			background-color:green;
		}
		#Form{
			margin:auto;
		}
		#List{
			display:flex;
			
			margin:auto;
			font-size:15px;
			padding:20px;
		}
		.box{
			display:flex;
			flex-direction:column;
			font-size:20px;
			margin:20px;
			
		
		}
		h1{
			margin:auto;
			color:white;
		}
		.title{
			font-size:50px;
			margin:auto;
			
		}
		.title1{
			font-size:25px;
			margin:auto;
			
		}
		table,th,td{
			border:1px solid black;
			border-collapse: collapse;
			padding:5px;
		}
		input[type=text]{
			padding:10px;
			width:130%;
		}
		#footer{
			background-color:rgb(33,150,236);
			display:flex;
			color:white;
		}
		#mainTable{
			background-color:orange;
			display:flex;
			flex:1;
		}
		input[type=submit]{
			padding:15px;
			background-color:rgb(34,98,148);
			color:white;
			font-size:20px;
		}
	</style>
</head>
<!--
<?php
/*	$songName=$_GET['songName'];
	$singerOrBand=$_GET['singerOrBand'];
	$personName=$_GET['personName'];
	$link=$_GET['link'];
	
	echo"<h1>$songName</h1>";
	//$_GET['songName']="";
	//$_GET['singerOrBand']="";
	//$_GET['personName']="";
	//$_GET['link']="";
*/
?>

<?php
if(isset($_GET['submit'])){
	$songName=$_GET['songName'];
	$singerOrBand=$_GET['singerOrBand'];
	$personName=$_GET['personName'];
	$link=$_GET['link'];
	
	if($songName!=""){
		$fh=fopen("songs.txt","a");
		chmod($fh,0777);
		$str=$songName."|".$singerOrBand."|".$personName."|".$link."\n";
		fwrite($fh,"$str");
		fclose($fh);

	}	

}
	$_GET['songName']="";
	$_GET['singerOrBand']="";
	$_GET['personName']="";
	$_GET['link']="";
	
	$songName="";
	$singerOrBand="";
	$personName="";
	$link="";
?>

-->
<div id="Wrapper">
	<div id="Head">
		<span class="title">Suggest a Song!!</span>
	</div>
<!--
	<div>
		<p>Hello all,<br>I like song suggestions from </p>
	</div>
-->
	<div id="Input">
	<div id="Form">
		<form action="saveToFile.php" mathod="get">

		<div class="box">
		<label for="songName">Song Name*:</label>
		<input type="text" name="songName"  id="songName" placeholder="Song name" required/>
		</div>

		<div class="box">
		<label for="singerOrBand">Singer/Band:</label>
		<input type="text" name="singerOrBand" placeholder=""/>
		</div>

		<div class="box">
		<label for="personName">Suggested By:</label>
		<input type="text" name="personName" placeholder="Your name/nickname"/>
		</div>

		<div class="box">
		<label for="link">Youtube Link*:</label>
		<input type="text" name="link"  id="link" required/>
		</div>
		<div class="box">
		<input type="submit" name="submit" value="Add to list!"  />
		</div>		
		</form>
	</div>
	</div>

	

	



<div id="mainTable">
<?php
	echo"<div id=\"List\">";
	$fh=fopen("songs.txt","r");
	echo"<table>";
	echo"<tr>
	<th>Index</th>
	<th>Song Name</th>
	<th>Singer/Band</th>
	<th>Suggested By</th>
	<th>YouTube Link</th>
	</tr>";
	$lineCnt=0;
	while($line=fgets($fh,200))
	{
		$tokens=explode("|",$line);
		$lineCnt++;
			echo"
				<tr>
					<td>$lineCnt</td>
					<td>$tokens[0]</td>
					<td>$tokens[1]</td>
					<td>$tokens[2]</td>
					<td><a href=\"$tokens[3]\" target=\"_blank\">$tokens[3]</a></td>
				</tr>
			";
	}
	echo"</table>";
	echo"</div>";
?>
</div>
<div id="footer">
	<div>
		<span class="title1">Code for this dynamic web page is written in php.</span>
	</div>
	<div>
		<span>HomeWork by Vrushali.:)</span>
		
	</div>
	<div>
		<span>Github link for code:</span>
		<a href="">Code link</a>
	</div>
</div>

</div>


</body>
</html>
