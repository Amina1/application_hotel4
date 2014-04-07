
<?php
$connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
$select=mysql_select_db("database_hotel");

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





include('include.php');?>
<br><br><br><br><br>
<h6>Galerie de photos:</h6>	
	<div id="page2">
<div id="page-bgtop">
			<div id="page-bgbtm">
				
					
						
								
						<div id="gallery"> <img class="output" src="../images/<?php echo $row_rssingle['photo'];?>" alt="" />
								<div id="thumbnail-bg">
								
								<ul class="thumbnails">
									<li><img class="active" src="../images/<?php echo $row_rssingle['photo'];?>"  title="chambre 1" alt="chambre1" width="604" height="375" onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /> </li>
									<li><img class="active" src="../images/im6.jpg " title="chambre 2" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
									<li><img class="active" src="../images/im2.jpg" title="chambre 3" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
									<li><img class="active" src="../images/im3.jpg" title="chambre 4" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
<li><img class="active" src="../images/header-bg-small.jpg" title="chambre5" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.salpha.opacity=70" /></li>
<li><img class="active" src="../images/im7.jpg" title="chambre 6" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
								</ul>
	
							</div>
							<br class="clear" />
						</div>
						<script type="text/javascript">

						$('#gallery').gallerax({
							outputSelector: 		'.output',					// Output selector
							thumbnailsSelector:		'.thumbnails li img',		// Thumbnails selector
							captionSelector:		'.caption'					// Caption selector
						});

					</script>
								
						
						<!-- end -->
						
						
					<div class="post">
						
	                                    <div id="cent"><table width="59%" cellspacing="1"  border="5">
    <caption>Les tarifs:</caption>
    
    <colgroup>
    	<col span="12" width="210" style="background-color:#fff" />
        
    </colgroup>
   
    <thead>
        <tr>
            <th id="navv" abbr="Nav" scope="col">type de Chambre</th>
            <th id="navv" abbr="Nb" scope="col">Prix/nuit</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td id="ff2" headers="nav"><center>single</center></td>
            <td id="ff2"><center>600 DH</center></td>
        </tr>
        
    </tbody>
</table><br>
 <center><a href="chambres.php" title="More" class="more"><font color="black">Retour>></font></a></center></div>
						<div class="entry">
						 </div>

			
				
					</div>
					 
			
				<!-- end #content -->
			
				<div id="sidebar">
		
		              
						
						<!--  -->
							
			
						</div></div>
		</div>
	</div>               
						
			
	
			

			
<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="restaurant.php">Restaurant</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="reservation.php">Reservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->
<div id="footer">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouira</p>
</div>
<!-- end #footer -->
</body>
</html>
