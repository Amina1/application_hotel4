<?php
    $connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
    $select=mysql_select_db("database_hotel");
	?>
	
								<?php


$conn=mysql_connect("localhost","root","");

$db=mysql_select_db("database_hotel",$conn);

@$date_arrive=$_POST['date_arrive'];
@$date_depart=$_POST['date_depart'];

$q="SELECT DATEDIFF('$date_arrive','$date_depart')";
$r=mysql_query("$q",$conn);
$row=mysql_fetch_row($r);


if($row[0]<0)

echo "<script language=javascript>
alert('veuiller vérifier les dates que vous avez entrez');
</script><meta http-equiv=\"refresh\" content=\"0; url= reservation.php\" />";



?>

<?php
include('include.php');?>
	<!-- end #menu -->
	
<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
					<div class="post"><br><br>
						
							<h2 class="title1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESERVATION</h2>
					
						<div class="entry">
						 <div class="espace2"> </div> <div class="formu4"><p>
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
echo "<fieldset><form>";
echo" <b><font color='#fc04ec'>Réservation effectu&eacute;e avec succ&eacute;e  !!<br><br></b>";
echo " &nbsp;&nbsp;&nbsp;";
echo "<a href=\"reservation.php\"> <font color='#fc04ec'><< Précédent</font></a>";
echo "</form></fieldset>";
// requéte insertion du nouvel enregistrement dans la table machine
 $requete="insert into reservation values ( '".$_POST["id_reserv"]."','".$_POST["nom"]."','".$_POST["email"]."','".$_POST["type"]."','".$_POST["date_depart"]."', '".$_POST["date_arrive"]."', '".$_POST["adulte"]."', '".$_POST["enfant"]."')";
// execution de la requete
$result = mysql_query($requete) 
?>
</td></tr></table>
	
	<br></p></div></div>

					</div>
		
					</div>
					 
				</div>
				<!-- end #content -->
				<div id="sidebar">
					
						
				
					
				
						
						<!--  -->
							
				
<br></div>
		</div>
              
						
						<!--  -->
				<div style="clear: left;">&nbsp;</div>			
<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->
<div id="footer">
	<p>Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouira</p>
</div>
<!-- end #footer -->
</body>
</html>