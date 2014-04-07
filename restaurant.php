
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
<link href="stylee.css" rel="stylesheet" type="text/css" media="screen" />
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

</style>

</head>

<body>


<div id="header">
<div class="row-1">
<div id="wrapper">

<h1>"Hotel Star"</h1>

			</div>
			</div>
	<div class="row-2 alt">
         	<div class="indent">
			
	<!-- end #header -->
 <div class="header-box-small">
    <!-- <img src="images/tel.jpg" width="222" height="34" alt=""> -->
 <div class="inner">
<ul class="nav">
		<li><a href="index.php" >ACCUEIL</a></li>
			<li><a href="les pages/chambres.php">CHAMBRES & TARIFS</a></li>
		 <li><a href="restaurant.php"  class="current">RESTAURANT</a></li>
			<li><a href="les pages/reservation.php" >RESERVATION</a></li>
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
         	 <marquee direction="left" scrollamount="5" onmouseout="this.start();" onmouseover="this.stop();" height="100" >
			<ul>
               <li><img class="ac" alt="" src="images/p6.jpg" /></li>
               <li><img class="ac" alt="" src="images/p2.jpg" /></li>
               <li><img alt="" class="ac" src="images/p5.jpg" /></a></li>
               <li><img alt="" class="ac" src="images/p8.jpg" /></a></li>
               <li><img class="ac" alt="" src="images/p11.jpg" /></a></li>
          
			   
            </ul></marquee>
         </div><br>
		 <h6 class="title1">Beinvenu dans notre Restaurant :) </h6>
	<div id="page">

			
				<div id="content">
					
					<div class="post">
						
						
					
						<div class="entry">
						<div class="formu3">
						
					
 <div class="rest">
<img src="images/picto-restos.gif" width="39" height="34" alt="">

Restaurant :<br><br>
 La salle de restaurant accueille les fins gourmets autour de mets internationaux sans cesse renouvelés.

L’équipe de cuisine réinvente ses menus tous les 2 mois pour proposer des plats originaux, issus de cultures culinaires diverses.

Plats marocains, entrées mexicaines ou desserts français, chaque assiette est un voyage qui emporte vos sens au-delà des remparts de la ville.

Découvrez des saveurs inexplorées, que vous soyez résidents de l’hôtel ou simplement de passage à Essaouira.</div>
    
  <div id="im"> <img src="P2.jpg" style="margin-left: 13px; margin-top: 13px;" width="444px" height="230px"width="444px" height="230px"/>
    </div></div></div>

					
						 <div class="wrapper line-ver">
						 	<div class="col-1">
							</div>
							<div class="col-2"></div></div> 
						 
						 
												 
							
						</div>
					</div>
					 
				
				<!-- end #content -->
				<div id="sidebar">
					
				
		
                  
					<div class="espace2"></div><div class="formu">    
					<span style="color:#7B0E10; font-weight:bold; font-size:27px; padding-left:64px;">Menu</span>
                                
 <ul>
 
                     	<li><img src="images/picto-fhotmeal.gif" width="39" height="34" alt=""><a href="plat.php"><font color="#fff">Plats chauds:</a></li>
  
                        <li><img src="images/picto-fcoldsnack.gif" width="39" height="34" alt=""><a href="boisson.php"><font color="#fff">Boisson</a></li>
                        <li><img src="images/picto-fcoldsnack.gif" width="39" height="34" alt=""><a href="dessert.php"><font color="#fff">Dessert</a></li><br><br>
                 
                      <br><br><br>
                     </ul>
	
</label></form>
						                     
	  </div>               
						
						<!--  -->
							
		
                  
					<div class="espace2"></div>
					

		                   
		       

 		</div>

	         
						
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	<br><br>	<br><br>	<br><br>	<br><br><br><br>	<br><br>	<br><br>

<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php"><b>Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="les pages/restaurant.php">Restaurant</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2014 Design by Amina LAMGUIGUIZE - Faculté polydisciplinaire de Tétouan</p>
</div>
<!-- end #footer -->
</body>
</html>
