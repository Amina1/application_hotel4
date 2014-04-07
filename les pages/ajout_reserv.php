
<?php 
$connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
$select=mysql_select_db("database_hotel");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> <title>Hotel  </title>
</script>

<link href="sty.css" rel="stylesheet" type="text/css" media="screen" />

</style>
</head>

<div id="header">
<div class="row-1">
<div id="wrapper">

<h1>"Hotel Star"</h1>
 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="970px" height="252px">
      <param name="movie" value="siham1.swf?xml_path=slides.xml" />
      <param name="quality" value="high" />
      <embed  style="margin-left: 13px; margin-top: 13px;" src="siham1.swf?xml_path=slides.xml" width="950px" height="252px" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
    </object>
			</div>
			</div>
	<div class="row-2 alt">
         	<div class="indent">
			
	<!-- end #header -->
 <div class="header-box-small">
 <div class="inner">
<ul class="nav">
		<li><a href="../index.php" class="current">ACCUEIL</a></li>
			<li><a href="les pages/chambres.php">CHAMBRES & TARIFS</a></li>
		 <li><a href="../restaurant.php">RESTAURANT</a></li>
			<li><a href="les pages/reservation.php">RESERVATION</a></li>
		<li><a href="les pages/contact.php">CONTACT</a></li>
		</ul>
	</div>
		</div>
               <!-- header-box end -->
            </div></div>
	<!-- end #menu -->
	
<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
<!-- end -->
</div><div class="post">
<h3>RESERVATION & TARIF</h3>
	<div class="entry">
<div class="espace2"> </div> <div class="formu2"><p>
  
				
<table width="660" height="19" border='0' align="center" cellpadding='1' cellspacing='1'>
<tr><td><br>		

	
		<?php
//récupérer les données du formulaire "ajouterClient"
$id_reserv=$_POST['id_reserv'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$type=$_POST['type'];
$date_arrive=$_POST['date_arrive'];
$date_depart=$_POST['date_depart'];
$adulte=$_POST['adulte'];
$enfant=$_POST['enfant'];

// bouton de retour  
echo "<form>";
echo" <fieldset><b><font color=#b006aa >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Merci pour votre réservation  !<br><br></b>";
echo "<a href=\"index.php\"> <font color='#b006aa'>Précédent</font></a></fieldset>";
echo " &nbsp;&nbsp;&nbsp;<br>";
echo "</form>";
// requéte insertion du nouvel enregistrement dans la table machine
 $requete="insert into reservation values ( '".$_POST["id_reserv"]."','".$_POST["nom"]."','".$_POST["email"]."','".$_POST["type"]."','".$_POST["date_depart"]."', '".$_POST["date_arrive"]."', '".$_POST["adulte"]."', '".$_POST["enfant"]."')";
// execution de la requete
$result = mysql_query($requete) 
?>
</td></tr></table>
	
		
<br></p></div></div>

					</div>
					<div class="post">
					
						 
						
						 
					
						 
						 
						 
												 
							
						</div>
					</div>
					 
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<div class="formu1">
                	<span style="color:#7B0E10; font-weight:bold; font-size:16px; padding-left:30px;">AUTHENTIFICATION</span>
		
                    <img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/>
							<form method="POST" action="connexion.php">
                    	<div id="ident">
                        <label><span style="margin:auto; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:15px; color:#fff;">LOGIN:</span></label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      			 <input type="text" name="login" class="input" />
		       			<div class="cls"></div>
		       			<label><span style="margin:auto; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:15px; color:#fff;">MOT DE PASSE:</span></label>
		      		 	<input type="password" name="passe"  class="input"/>
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="image" src="images/login.gif" name="authentification" value="Login" class="submit"/>
		       			<div class="cls"></div>
                       </form>
                        </div>
                    </div> 
						
						<!--  -->
							
		
						
		
                  
					
</div>
		</div>
	</div>               
						
						<!--  -->
				<div style="clear:left;">&nbsp;</div>
	
			

<div class="hr"><p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p></div>
	<!-- end #page -->

<div id="footer">
	<p><font color=#fff >Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouira</p>
</div>
<!-- end #footer -->
</body>
</html>
