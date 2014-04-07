<?php
$link = mysql_connect("localhost","root","") or die ("no server");
$db = mysql_select_db("database_hotel") or die("no database"); 
$id=$_GET['id'];
$q ="select * from chambre where num_chambre='$id'";
$r = mysql_query("$q", $link);
if($r){
	while ($row = mysql_fetch_array($r)){
		header("content-type: image/jpeg");
		echo $row['image'];
		}
	}
else {
	echo ("no query");
	}
?>

