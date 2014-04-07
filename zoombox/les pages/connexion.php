<?php
$connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
$select=mysql_select_db("database_hotel");
//MX Widgets3 include
require_once('includes/wdg/WDG.php');

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


$query_rscategorie = "SELECT * FROM categorie";
$rscategorie = mysql_query($query_rscategorie, $connect) or die(mysql_error());
$row_rscategorie = mysql_fetch_assoc($rscategorie);
$totalRows_rscategorie = mysql_num_rows($rscategorie);



?><html xmlns:wdg="http://ns.adobe.com/addt">

<head> <title>Hotel</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script type="text/javascript" src="includes/common/js/sigslot_core.js"></script>
<script src="includes/common/js/base.js" type="text/javascript"></script>
<script src="includes/common/js/utility.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/wdg/classes/MXWidgets.js"></script>
<script type="text/javascript" src="includes/wdg/classes/MXWidgets.js.php"></script>
<script type="text/javascript" src="includes/wdg/classes/Calendar.js"></script>
<script type="text/javascript" src="includes/wdg/classes/SmartDate.js"></script>
<script type="text/javascript" src="includes/wdg/calendar/calendar_stripped.js"></script>
<script type="text/javascript" src="includes/wdg/calendar/calendar-setup_stripped.js"></script>
<script src="includes/resources/calendar.js"></script>
<link href="includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>

</head>

<body>


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
		<li><a href="index.php" class="current">ACCUEIL</a></li>
			<li><a href="les pages/chambres.php">CHAMBRES & TARIFS</a></li>
		 <li><a href="restaurant.php">RESTAURANT</a></li>
			<li><a href="les pages/reservation.php">RESERVATION</a></li>
		<li><a href="les pages/contact.php">CONTACT</a></li>
			
		</ul>
	</div>
		</div>
               <!-- header-box end -->
            </div></div>
<!-- galerie des photos-->	
<!-- content -->
		<div id="cont">
      	<div class="gallery">
           <!-- <ul>
			
               <li><a href="sh.php"><img alt="" src="images/2page-img1.jpg" /></a></li>
               <li><a href="#"><img alt="" src="images/2page-img2.jpg" /></a></li>
               <li><a href="#"><img alt="" src="images/2page-img3.jpg" /></a></li>
               <li><a href="#"><img alt="" src="images/2page-img4.jpg" /></a></li>
               <li><a href="#"><img alt="" src="images/2page-img5.jpg" /></a></li>
               <li><a href="#"><img alt="" src="images/2page-img6.jpg" /></a></li>
			   
            </ul>-->
         </div><br><br>
	<div id="page">

			
				<div id="content">
					
					<div class="post">
						<h2 class="title">Hotel Star is happy to welcome you ^^</h2>
						
					
						<div class="entry">
						<div class="formu3">
					
  <fieldset>
    
 <img class="img-indent png" alt="" src="images/1page-img1.png" /><b>Hôtel Star </b>est en mesure de mieux répondre à vos rêves et à vos désirs, de par l'originalité de son cachet architectural, son confort, et l'authenticité d'un cadre magique et exceptionnel doté d’une situation privilégiée, à l’entrée de la vieille ville, face à la mer et au port, sur le boulevard principal du front de mer.<br> <b>Hôtel Star</b> offre à la fois calme, tranquillité et un excellent service personnalisé.
Venez seul ou avec votre famille avec vous, restez ici pour une nuit ou pendant des semaines, rester ici pendant un voyage d'affaires ou à une sorte de conf&eacute;rence - de toute façon notre hôtel est la meilleure variante possible.
N'h&eacute;sitez pas à nous contacter à tout moment au cas où vous avez des questions ou des pr&eacute;occupations.<br><br>
</p></fieldset></div></div>

					</div>
				
					<div class="post">
					
						 <div class="wrapper line-ver">
						 	<div class="col-1">
							</div>
							<div class="col-2"></div></div> 
						 
						 
												 
							
						</div>
					</div>
					 
				
				<!-- end #content -->
				<div id="sidebar">
					
				
		
                  
					<div class="espace2"></div><div class="formu">

					
                   	<form id="form1" name="form1" method="post" action="tarif_reservation.php">
					<span style="color:black; font-weight:bold; font-size:25px; padding-left:36px;">RESERVATION</span>
   <br><br>                             
<h5>&nbsp;&nbsp;Date d'arrivée: &nbsp;&nbsp;&nbsp;Date de d&eacute;part:</h5>
	&nbsp;&nbsp;<input name="date_arrive" class="Style8" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" id="dated" value="" size="9" wdg:mondayfirst="true" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" />
</label><label></label>
<input name="date_depart" class="Style8" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" id="dater" value="" size="9" wdg:mondayfirst="true" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" /></td>
<br>
<br>
<h5>&nbsp;&nbsp;Type de chambre:</h5>
<br>
</label>  
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="id_categorie"  style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" class="Style8" id="id_categorie">
                                          <?php
do {  
?>
<option value="<?php echo $row_rscategorie['id_categorie']?>"><?php echo $row_rscategorie['type']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                          <?php
} while ($row_rscategorie = mysql_fetch_assoc($rscategorie));
  $rows = mysql_num_rows($rscategorie);
  if($rows > 0) {
      mysql_data_seek($rscategorie, 0);
	  $row_rscategorie = mysql_fetch_assoc($rscategorie);
  }
?>
                                        </select>   
<div class="field">
<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input name="imageField" type="image" src="images/tarif.gif" border="0">
<br><br></form>
</div>	
</label></form>
						                     
	  </div>               
						
						<!--  -->
							
			  <div class="line-hor"></div>
			   <div class="formu">
			   <br>
                	<span style="color:black; font-weight:bold; font-size:20px; padding-left:36px;">AUTHENTIFICATION</span>
		
                    <img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/>
							<form method="POST" action="connexion.php">
                    	<div id="ident">
                        <label><span style="margin:auto; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:15px; color:#fff;"><b>LOGIN:</b></span></label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      			 <input type="text" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" name="login" class="input" />
		       			<div class="cls"></div>
		       			<label><span style="margin:auto; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:15px; color:#fff;"><b>MOT DE PASSE:</b></span></label>
		      		 	<input type="password" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" name="passe"  class="input"/>
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="image" src="images/login.gif" name="authentification" value="Login" class="submit"/>
		       			<div class="cls"></div>
                       </form>
                        </div>
                    </div> 
						
		
						
<font color="red">		       
<?php 
session_start();
if (isset($_POST['authentification']))
{
 // teste les valeurs. 
 $login=trim(addslashes($_POST['login']));
 $passe=trim(addslashes($_POST['passe']));
//connexion


  $requette="SELECT login, passe FROM administrateur WHERE login='$login' and passe='$passe'";
  $resultat=mysql_query($requette);
  $ligne = mysql_fetch_array($resultat, MYSQL_NUM);

  
  if($ligne != FALSE)
  {  
   header("location: administrateur/administrateur.php");
  exit;
  }
 

  else{echo" <script language=javascript>
  alert('Mot de passe ou login invalide');

  </script><meta http-equiv=\"refresh\" content=\"0; url=index.php\" />";}
  

}
?>
<br><br>
		   
</font>			  

				</form>
                    </div> 
						
		
                  
					<div class="espace2"></div><div class="formu">
					

		                   
		       

</div> 		</div>

	         
						
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	<br><br>	<br><br>	<br><br>	<br><br><br><br>	<br><br>	<br><br>

<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouira</p>
</div>
<!-- end #footer -->
</body>
</html>
