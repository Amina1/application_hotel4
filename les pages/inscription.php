
<?php
include('include.php');?>
	
	<div id="page">
<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
					<div class="post">
						
						<h2 class="meta"><span class="date">FORMULAIRE D'INSCRIPTION</span></span></h2>
					
						<div class="entry">
						 <div class="espace2"> </div> <div class="formu2"><p>
						  <script language="JavaScript" type="text/javascript">
      // Teste si le mail a une forme correcte
      function checkmail(email) {
         var reg = /^[a-z0-9._-]+@[a-z0-9.-]{2,}[.][a-z]{2,4}$/
         return (reg.exec(email)!=null)
      }
      // Teste le contenu des champs du form avant submit
      function test(email) {
         if(!checkmail(email.value)) {
            alert("Email invalide !"); email.focus(); return false;
         }
		 return true;
      }
                                  </script>
<form method="post" action="#"  name="ajouter" onSubmit="return test(this.email)">

<input type="hidden" maxlength="256" size="27" name="id_client">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sexe:&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="sexe" value="<?php echo $sexe?>" >
 <option selected value="Sélectionnez">-- Sélectionnez votre sexe --</option>
          <option value="Mlle">Mlle</option>
          <option value="Me">Mme</option>
          <option value="M">Mr</option>
        </select><br><br>
		
		


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom:&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="256" size="27" name="nom"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prénom: &nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="256" size="27" name="prenom"> <br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: &nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="256" size="27" name="email"><br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login:&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="256" size="27" name="login"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot de Passe: &nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" maxlength="256" size="27" name="passe">

<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="bouton" type="submit" name="inscrire" value="Inscrire">
<input class="bouton" type="reset" name="Effacer" value="Effacer">

<br>
</form>
						</p></div></div>

					</div>
					<div class="post">
						<h2 class="title"> </h2>
						 
						
						 
					</div>
					<div class="post">
						 
						 
						 
												 
							
						</div>
					</div>
					 
				</div>
				<!-- end #content -->
				<br><br><div id="sidebar">
					<ul>
						<li>
							
						</li>
						<li>
				
						<br><br><center><h2>IDENTIFICATION</h2></center>
		
                  
					<div class="espace2"></div><div class="formu">

					<form action="connexion.php" method="POST">
                   
						                     <label>Login:</label>
						
		      			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="18" class="input" name="login"><br><br>
		       			<label>Mot de passe:</label>&nbsp;
		      		 	<input type="password" size="18" name="passe" class="input">
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="submit" style="margin-left:-40px; height:40px; width:119px;" value="Connecter >> ">
		       
	  </form></div>               
						
						<!--  -->
							
				<div class="espace1"></div>
						
		
                  
					<div class="espace2"></div><div class="formu">
<br></div></div>
		</div>
	</div>               
						
						<!--  -->
				<div style="clear: both;">&nbsp;</div>
	
			


<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouira</p>
</div>
<!-- end #footer -->
</body>
</html>
