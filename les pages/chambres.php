<?php
$connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
$select=mysql_select_db("database_hotel");?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$query_rssingle = "SELECT * FROM single";
$rssingle = mysql_query($query_rssingle, $connect) or die(mysql_error());
$row_rssingle = mysql_fetch_assoc($rssingle);
$totalRows_rssingle = mysql_num_rows($rssingle);



$colname_rssingle = "-1";
if (isset($_POST['id_sing'])) {
  $colname_rssingle = $_POST['id_sing'];
}



$query_rstriple = "SELECT * FROM triple";
$rstriple = mysql_query($query_rstriple, $connect) or die(mysql_error());
$row_rstriple = mysql_fetch_assoc($rstriple);
$totalRows_rstriple = mysql_num_rows($rstriple);



$colname_rstriple = "-1";
if (isset($_POST['id_trip'])) {
  $colname_rstriple = $_POST['id_trip'];
}

/*$query_rsdouble = "SELECT * FROM double";
$rsdouble = mysql_query($query_rsdouble, $connect) or die(mysql_error());
$row_rsdouble = mysql_fetch_assoc($rsdouble);
$totalRows_rsdouble = mysql_num_rows($rsdouble);

$colname_rsdouble = "-1";
if (isset($_POST['id_doub'])) {
  $colname_rsdouble = $_POST['id_doub'];
}*/
include('include.php');?>
<div id="cont">
      	<div class="gallery">
          <br><br><br><marquee direction="left" scrollamount="5" onmouseout="this.start();" onmouseover="this.stop();" height="100" >
	
		 <ul>
			
               <li><img alt="" src="../images/2page-img1.jpg" /></a></li>
               <li><img alt="" src="../images/2page-img2.jpg" /></a></li>
               <li><img alt="" src="../images/2page-img3.jpg" /></a></li>
               <li><img alt="" src="../images/2page-img4.jpg" /></a></li>
               <li><img alt="" src="../images/2page-img5.jpg" /></a></li>
               <li><img alt="" src="../images/2page-img6.jpg" /></a></li>
			   
            </ul></marquee>
         </div><br><br>
	<div id="page1">

			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
						
					<div class="post">
						
						<h4>CHAMBRES & TARIFS:</h4>
					
						<div class="entry">
						
						 <div class="espace2"> </div> <div class="formu2">
						
						<table width="130%" cellspacing="3" cellpadding="0" border="0">
   <? if($erreur){ ?>
                                            <?}?>
  <tr>
    <td valign="top"><strong><span class="sp1ch" >Type de chambre :</span> </strong><span class="sp1ch" >Chambre Single</span></td>
  
  </tr>
  <tr>
    <td width="42%"><strong><span class="sp1ch" >Prix/nuit :600 DH</span></td>
   <td><span class="sp1ch"><strong>Services chambre :</strong></span></td>
  </tr>
  <tr>
    <td valign="top"><img src="../images/<?php echo $row_rssingle['photo'];?>" style="border:5px solid #D2691E; color:#0000FF font:Comic Sans MS" height="83" width="183" alt="Chambre Single" >
    </div></td>
	 <td width="58%"><div class="cntchm">Salle de bains avec baignoire, climatisée, balcon,télévision LCD par satellite + téléphone,un accès à Internet gratuit est disponible à la réception pour tous nos clients et vous pouvez accéder à une connexion WIFI depuis les chambres..
</div>
		
	<a href="single.php" title="More" class="more">Plus...</a>
	<!--<td><a href="reservation.php"><img name="c" src="../images/res.jpg" width="125" height="26" border="0" id="conn" alt="" /></a></td>-->
    </tr>
	
  
  <tr>
    <td height="19" colspan="2">
	<hr color="black"><hr color="black"></td>
    </tr>
	 
</table>



<!-- chambre double-->
<table width="130%" cellspacing="3" cellpadding="0" border="0">
  <tr>
 
	</tr>
  <tr>
    <td valign="top"><strong><span class="sp1ch">Type de chambre : </span></strong><span class="sp1ch">Chambre Double</span></td>

  </tr>
  <tr>
    <td width="42%"><strong><span class="sp1ch">Prix/nuit :700 DH</strong> </span></td>
   <td><span class="sp1ch"><strong>Services chambre :</strong></span></td>
  </tr>
  <tr>
    <td valign="top"><div class="picch"><img src="../images/ima6.jpg" height="83" width="183" style="border:5px solid #D2691E; color:#0000FF font:Comic Sans MS" alt="Chambre Double" >
    </div></td>
	 <td width="58%"><div class="cntchm"> Dressing, TV écran plat, coffre-fort, salle de bains avec baignoire et douche, WC séparé. Grande terrasse aménagée + téléphone,un accès à Internet gratuit est disponible à la réception pour tous nos clients et vous pouvez accéder à une connexion WIFI depuis les chambres.	  </div>
	  <a href="double.php" title="More" class="more">Plus...</a>
	 
    </tr>

  <tr>
    <td height="19" colspan="2">
	<hr color="black"><hr color="black">
	</td>
    </tr>
</table>

<!-- chambre triple-->
<table width="130%" cellspacing="3" cellpadding="0" border="0">
<tr>
 
	</tr>
  <tr>
    <td valign="top"><strong><span class="sp1ch">Type de chambre : </span></strong><span class="sp1ch">Chambres Triples</span></td>
 
  </tr>
  <tr>
    <td width="42%"><strong><span class="sp1ch">Prix/nuit :750 DH</strong></span></td>
   <td><strong><span class="sp1ch">Services chambre :</strong></span></td>
  </tr>
  <tr>
    <td valign="top"><img height="83" width="183" alt="Chambres Triples" id="photo" style="border:5px solid #D2691E; color:#0000FF font:Comic Sans MS" src="../images/<?php echo $row_rstriple ['photo']; ?>">
    </div></td>
	 <td width="58%"><div class="cntchm">Salle de bain moderne (baignoire ou douche, sèche cheveux), téléphone avec accès au room service, télévision par satellite et l'accès Internet + téléphone,un accès à Internet gratuit est disponible à la réception pour tous nos clients et vous pouvez accéder à une connexion WIFI depuis les chambres.  </div>
	<a href="triple.php" title="More" class="more">Plus...</a>
	
    </tr>
  
  
</table>
 
						<br></p></div></div>

			
				
				
					</div>
					 
				</div>
				<!-- end #content -->
			
				<div id="sidebar">
					
						<!--  -->
							
			
						</div></div>
		</div>
	</div>               
						
						<!--  -->
			
	
			
<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="restarant.php">Restaurant</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="reservation.php">Reservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact</a></b>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->

<div id="footer">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 2014 Design by Amina LAMGUIGUIZE - Faculté polydisciplinaire de Tétouan </p>
</div>
<!-- end #footer -->
</body>
</html>
