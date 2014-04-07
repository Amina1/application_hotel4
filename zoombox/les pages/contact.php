<?php 
$connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
$select=mysql_select_db("database_hotel");?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head> <title>Hotel  </title>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

</style>
</head>

<div id="header">
<div class="row-1">
<div id="wrapper">

<h1>"Hotel Star"</h1>
 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="970px" height="252px">
      <param name="movie" value="siham1.swf?xml_path=slides.xml" />
      <param name="quality" value="high" />
      <embed  style="margin-left: 13px; margin-top: 13px;" src="../siham1.swf?xml_path=slides.xml" width="950px" height="252px" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
    </object>
	<ul class="nav">
		<li><a href="../index.php" class="current">ACCUEIL</a></li>
			<li><a href="chambres.php">CHAMBRES & TARIFS</a></li>
		 <li><a href="../restaurant.php">RESTAURANT</a></li>
			<li><a href="reservation.php">RESERVATION</a></li>
		<li><a href="contact.php">CONTACT</a></li>
			<li><a ></a></li>
		</ul>
			</div>
			</div>
	<div class="row-2 alt">
         	<div class="indent">
			
	<!-- end #header -->
 <div class="header-box-small">
 <div class="inner">

	</div>
		</div>
               <!-- header-box end -->
            </div></div>
	<!-- end #menu -->
	<br><br><br><br>
		<h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FORMULAIRE DE CONTACT</h6>
	<div id="page3">
<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
						
					<div class="post">
						
					
					
						<div class="entry">
						 <div class="espace2"> </div> <div class="formu5"><p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form1" >	
			
	<div id="fre">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="message"><font color="black">Nom<font color="#fc04ec">*</font>:<span id="sprytextfield1">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inn" style="border:4px solid #D2691E; color:#0000FF font:Comic Sans MS" name="f_1" type="text" id="f_1" maxlength="256" size="30">
<span class="textfieldRequiredMsg"><font color="#fc04ec">remplir le champs!!</span><span class="textfieldInvalidFormatMsg"><font color="#fc04ec">Format non valide.</span></span> 
<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="message"><font color="black">Prénom:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  class="inn" style="border:4px solid #D2691E; color:#0000FF font:Comic Sans MS" type="text" name="f_2" id="f_2" maxlength="256" size="30" > <br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Pays:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  class="inn" style="border:4px solid #D2691E; color:#0000FF font:Comic Sans MS" type="text" name="f_3" id="f_3" maxlength="256" size="30" ><br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="message"><font color="black">Email<font color="#fc04ec">*</font>:<span id="sprytextfield2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  class="inn" style="border:4px solid #D2691E; color:#0000FF font:Comic Sans MS" type="text" name="f_4" id="f_4" maxlength="256" size="30">
 <span class="textfieldRequiredMsg"><font color="#fc04ec">remplir le champs!!</span><span class="textfieldInvalidFormatMsg"><font color="#fc04ec">Format non valide.</span></span>
 <span class="textfieldRequiredMsg"><font color="#fc04ec">remplir le champs!!</span><span class="textfieldInvalidFormatMsg"><font color="#fc04ec">Format non valide.</span></span>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="message"><font color="black">Message<font color="#fc04ec">*</font>:</label><span id="sprytextarea1">&nbsp;&nbsp;&nbsp;

<textarea  style="border:4px solid #D2691E; color:#0000FF font:Comic Sans MS" name="f_5" id="f_5"  rows="5" cols="30"></textarea>
<span class="textareaRequiredMsg"><font color="#fc04ec">remplir le champs!!</span></span> 
<br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="message"><font color="#fc04ec">*</font> <font color="black">champs obligatoire</label><br><br>
											
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" class="in" name="do" id="Envoyer" value="Envoyer"> 
<input class="in"  type="reset" name="Effacer" value="Effacer"><br><br>
		       
	
							
	 <?php        
             if(isset($_POST['do']) && @$_POST['do']=='Envoyer'){                           
$nom=$_POST['f_1'];
$prenom=$_POST['f_2'];
$pays=$_POST['f_3'];
$email=$_POST['f_4'];
$message=$_POST['f_5'];
$a="insert into contact values (\"\",\"$nom\",\"$prenom\",\"$pays\",\"$email\",\"$message\")";
  if(mysql_query($a)){
   echo" <font color=#b006aa >*Merci d'avoir pris le temps de remplir ce formulaire.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nous vous répondrons dans les plus brefs délais.<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L'équipe d'Hotel Star. ^^ * ";}
                  }
                 ?>
					</form></div></p><br></div></div>
					</div>
				
					</div>
					 
				</div><!-- end #content -->
				<div id="sideba">
					<ul>
						<li>
							
						</li>
						<li>
				
						<span style="color:black; font-weight:bold; font-size:25px; padding-left:36px;">Nos coordonnées:</span><br><br>
		
                  
					<div class="espace2"></div><div class="fo">
              <tr>
		<td rowspan="4" valign="top" background="images/Site_29.jpg"><div align="center" class="Style25">
		  <div align="center"><br>
                <b><font color="#fff">20, Bd Med 5, Essaouira, Maroc<br>
  <strong><font color="black">T&eacute;l:</font></strong> 0524 47 59 53 / 0524 46 58 54<br>
  <strong><font color="black">Fax:</font></strong> 0524 46 58 52<br>
  <strong><font color="black">Email:</font></strong><br>
                <a href="mailto:Contact@HotelStar.com"><font color="#fff"> Contact@HotelStar.com</a><br>
   <a href="mailto:HotelStar@menara.ma"><font color="#fff">HotelStar@menara.ma</a><br><br> </span></div>
   <img src="../images/enveloppe.gif" width="37" height="34" alt="">
		</div></td>               
		       
	  </form></div>               
						
						<!--  -->
							
				<div class="espace1"></div>
				<br><br>
						<span style="color:black; font-weight:bold; font-size:25px; padding-left:36px;">l'emplacement:</span><br><br>
		
                  
					<div class="espace2"></div><div class="formu">
					<td height="111">
			<img src="../images/Site_26.jpg"   style="border:5px solid #D2691E; color:#0000FF font:Comic Sans MS" width="265" height="164" alt=""></td>
<br></div></div>
		</div>
	</div>               
<!-- End ImageReady Slices -->
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom");
//-->
</script>						
						<!--  -->
				<div style="clear: both;">&nbsp;</div>
	
			


<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->

<div id="footer">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 2014 Design by Amina LAMGUIGUIZE - Faculté polydisciplinaire de Tétouan</p>
</div>
<!-- end #footer -->
</body>
</html>