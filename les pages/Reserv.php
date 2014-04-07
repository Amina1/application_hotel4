<?php
    $connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
    $select=mysql_select_db("database_hotel");
	?>
<?php
include('../les pages/include.php');?>

	

<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
					<div class="post">
						
					<h2 class="title1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESERVATION</h2>
					
						<div class="entry">
						 <div class="espace2"> </div> <div class="formu4">
				
						 <?php
//requête de travail
$requete="select * from reservation";
$resultat=mysql_query($requete) or die(mysql_error());

	  ?>  
  
	
 <TABLE border="0" align="center" class="tableau">
    <tr class="style3">

<th colspan="1" bgcolor="#dfdbdf"  width='47'  bordercolor='#000000'><span class='style12'><font color=#696868>Modifier</th>
		<th colspan="1" bgcolor="#dfdbdf"  width='47'  bordercolor='#000000'><span class='style12'><font color=#696868>Supprimer</th>
		<th bgcolor="#dfdbdf" width='47' bordercolor='#000000'><span class='style12'><font color=#696868>Nom </th>
					<th bgcolor="#dfdbdf" width='47' bordercolor='#000000'><span class='style12'><font color=#696868>Email </th>

<th bgcolor="#dfdbdf" width='80'  bordercolor='#000000'><span class='style12'><font color=#696868>Type</th>
<th bgcolor="#dfdbdf" width='100'  bordercolor='#000000'><span class='style12'><font color=#696868>Date arrivée</th>
<th bgcolor="#dfdbdf" width='100'  bordercolor='#000000'><span class='style12'><font color=#696868>Date départ</th>
<th bgcolor="#dfdbdf" width='100'  bordercolor='#000000'><span class='style12'><font color=#696868>Adulte</th>
<th bgcolor="#dfdbdf" width='100'  bordercolor='#000000'><span class='style12'><font color=#696868>Enf</th>				

								<?php
		
		
	while ($row=mysql_fetch_row($resultat))
		{
		$id_reserv=$row[0];
		$nom=$row[1];
	$email=$row[2];
			$type=$row[3];
				$date_arrive=$row[4];
					$date_depart=$row[5];
					$adulte=$row[6];
					$enfant=$row[7];
				
	
					
		?>

		
	  
		

	<tr>
	<td align="center" bgcolor="#ebe5e5">

		<a  href="modifierReservForm.php?id_reserv=<?php echo $id_reserv?>"> <input name="tret" alt="Modifier" type="image"  src="../images/modifie.png" /></a>
			
			</td>
			<td align="center" bgcolor="#ebe5e5">
			<a href="supprimerReservForm.php?id_reserv=<?php echo $id_reserv?>"><input name="tret" alt="Suprimer" type="image"  src="../images/delete.png" />
</a>
			</td>

			
			<input type="hidden" name="id_reserv" value="<?php echo $id_reserv?>">

			<td align="center" bgcolor="#ebe5e5">
				<span class='style12'><font color=#696868><?php echo $nom?>
			</td>

			<td align="center" bgcolor="#ebe5e5">
				<span class='style12'><font color=#696868><?php echo $email?>
			</td>
			
			<td align="center" bgcolor="#ebe5e5">
			<span class='style12'>	<font color=#696868><?php echo $type?>
			</td>
			
						<td align="center" bgcolor="#ebe5e5">
			<span class='style12'>	<font color=#696868><?php echo $date_arrive?>
			</td>
						<td align="center" bgcolor="#ebe5e5">
			<span class='style12'>	<font color=#696868><?php echo $date_depart?>
			</td>
				
				
			
			
			<td align="center" bgcolor="#ebe5e5">
			<span class='style12'>	<font color=#696868><?php echo $adulte?>
			</td>
			
			<td align="center" bgcolor="#ebe5e5">
			<span class='style12'>	<font color=#696868><?php echo $enfant?>
			</td>
		
		
		
		</tr>
		<?php
		}
		?>

     </table> 
	 <table >
	    <tr class="style3" bgcolor=""><th   align="left" width='800' height='6'><span class='style12'>

<input class="bouton" type="submit" name="Nombre de client" value="Nbr réservations"  onClick="window.location='nombreReserv.php';">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input  class="bouton" type="submit" name="Précédent" value="Précédent"  onClick="window.location='reservation.php';">&nbsp;&nbsp;


</th>
</tr>
</table>

	<br></p></div></div>

					</div>
					<div class="post">
						
						 
						
						 
					</div>

					</div>
					 
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							
						</li>
						<li>
				
							<span style="color:#7B0E10; font-weight:bold; font-size:20px; padding-left:30px;">MENU ADMINISTRATEUR</span>
					<div class="espace2"></div><div class="formu">
<ul>
								
								
							
								<li><a href="gestClients.php"><font color="red" >Gestion des clients</a></li>
							  
								<li><a href="gestChambres.php"><font color="red" >Gestion des  réservations</a></li>
								<li> &nbsp;&nbsp;&nbsp;&nbsp;<a href="listReserv.php"><font color=#b006aa >Liste réservations</font></a></li>  
							
								  <li> &nbsp;&nbsp;&nbsp;&nbsp;<a href="facture.php"><font color=#b006aa >Réservation & Facture </font></a></li> 
								  
                                  <li> &nbsp;&nbsp;&nbsp;&nbsp;<a href="rechercheReserv.php"><font color=#b006aa >Recherche </font></a></li> 
								    <li><a href="gestCategorie.php"><font color="red" >Gestion des catégories</a></li>
								<li><a href="deconnexion.php"><font color="red" >Déconnexion</a></li>

								
							</ul>
					
					</div>               
						
						<!--  -->
		</div></div>
		
	</div>            				
						<!--  -->
				<div style="clear: left;">&nbsp;</div>
	
		   
<br><br>	
<div class="hr"><p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p></div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouira</p>
</div>
<!-- end #footer -->
</body>
</html>