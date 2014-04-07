
<?php
mysql_pconnect("localhost","root","");
$sql ="DROP DATABASE IF EXISTS database_hotel;";	
mysql_query($sql) or die(mysql_error());

$sql ="CREATE DATABASE IF NOT EXISTS database_hotel;";
mysql_query($sql) or die(mysql_error());

$sql ="USE database_hotel;";
mysql_query($sql) or die(mysql_error());

$fich = fopen('hotel.sql',"r+");
$lig="";
 while(!feof($fich)) 
        $lig.=fgets($fich); 
print $lig ;
	$req=explode(";",$lig);
	foreach($req as $lii){
mysql_query($lii); }
fclose ($fich);	
header("Location:index.php");
?>
