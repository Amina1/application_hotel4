<?php
    $connect=mysql_connect("localhost", "root", "") or die ("Echec de la connexion au serveur !");
    $select=mysql_select_db("database_hotel");
	
//MX Widgets3 include
require_once('../includes/wdg/WDG.php');

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

$colname_rscategorie = "-1";
if (isset($_POST['id_categorie'])) {
  $colname_rscategorie = $_POST['id_categorie'];
}



$query_rschambre = "SELECT * FROM  chambre";
$rschambre = mysql_query($query_rschambre, $connect) or die(mysql_error());
$row_rschambre = mysql_fetch_assoc($rschambre);
$totalRows_rschambre = mysql_num_rows($rschambre);


$colname_rschambre = "-1";
if (isset($_POST['num_chambre'])) {
  $colname_rschambre = $_POST['num_chambre'];
}
?>
	


<?php
include('../les pages/include.php');
?>
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
<script type="text/javascript">
$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 560;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  // Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
    .wrapAll('<div id="slideInner"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth
    });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  // Insert controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
    .append('<span class="control" id="rightControl">Clicking moves right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control')
    .bind('click', function(){
    // Determine new position
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	// Hide / show controls
    manageControls(currentPosition);
    // Move slideInner using margin-left
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  // manageControls: Hides and Shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});

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

</head>
	

			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
					<div class="post">
						<br><br><br>
						<h2 class="title1">Resultat de la Recherche</h2>
					
						<div class="entry">
						 <div class="espace2"> </div> <div class="formu6"><p>

						<p style="font-size:18px" >
<font color="black">Découvrez toutes les chambres disponibles.
Un large choix pour votre réservation de chambre. 
<br>Réservez votre chambre directement en ligne .</font>
				</p>
              

  
									
  <?php


$ag_dep=$_GET['id_categorie'];
$Dispp=$_GET['Disp'];

if ($Dispp="oui"){
$q ="select * from chambre where id_categorie=$ag_dep and   disponibilite='$Dispp'" ;
}
if ($Dispp="tous") {
$q ="select * from chambre where id_categorie=$ag_dep " ;
}


$r = mysql_query($q);
$num=mysql_num_rows($r);
if ($num==0){

echo '<div class="formu" style="height:10px;"><br>
<img src="../images/warning.png"  style=" width=38px ; height=90px ;  margin-left=10px ;" /><b>Recherche Introvable</b>  
<a href="reservation.php" class="button">Réserver</a>';
 }
if($r){
	while ($row = mysql_fetch_array($r)){
	echo  '<div id="slideshow">';
	echo  '<div id="slidesContainer">';
	echo  '<div class="slide">';
	echo  "<br>"; 
	?>  
<img src="show.php?id=<?php echo $row['num_chambre']?>" width="87%" height="50%" style="border:5px solid #D2691E; color:#0000FF font:Comic Sans MS" />

<?php
echo "<div class=''>";
ECHO "<div class=''>";
echo"<center >";
//echo "$row[prix_jour]  DH";echo"</center>";echo"</div>";


$o='non';
$dis=$row['disponibilite'];
if ($dis==$o){
echo  '<div class="va">';
echo  'Non disponible';
echo "<img id='image' src='../images/error.png'/></th></tr>";

}
else {
echo  '<div class="valid">';
echo "<tr>
 
          <th><img id='image' src='../images/man_icon.jpg'/> <font color='#D2691E' size='5px'>($row[nbr_personne])</font></th>
        
	  <th>";
echo  'Disponible';

echo "<img id='image' src='../images/valid.png'/></th></tr>"; 
echo  '<div class="val">';

echo "<form  method='post' action='reserve.php'>";
echo '<input  type="submit"  VALUE="Réserver Maintenant >>" class="inn"   style="font-size:14px;  font-weight: none; margin-left:10px; margin-top:32px; border:none; z-index:1;" />';

echo "</form>";
}

echo "</table>";

echo "</div>";
echo "</div></div></div>";

}

	}
else {
	echo ("no query");
	}
	

		?>


						</div></div>

					</div>
	
					</div>
					 
				</div>
				<!-- end #content -->
				<br><br><div id="sidebar">
					

                		


<?php

/*$sql = "SELECT * FROM reservation WHERE id_reserv = \'".$id_reserv."\' AND date_arrive <= \'".$date_arrive."\' AND date_depart >= \'".$date_depart."\'"; //making sql

$res= mysqli_query($link,$sql);//executes the query

if(mysqli_num_rows($res)>0){

return 1;

} else {

return 0;

 }<input class="bouton" type="submit" name="Nombre de client" value="<?php
if ($totenreg==0)
      echo "il n'y a pas de client" ;	  
    else
	{ 
    echo "Nbr de clients:".$totenreg." ";    
	}?>  "  onClick="window.location='nombreClient.php';">
	SELECT * 
FROM CHAMBRES C 
WHERE C.type_chambre = '$type_chambre'
AND ID_chambre NOT IN (
  SELECT ID_chambre 
  FROM RESERVATION R 
  WHERE R.date_arrivee > '$date_arrivee'
  AND R.date_depart < '$date_depart'
);
<input class="bouton" type="submit" name="Nombre de client" class="in" value="Nbr de clients"  onClick="window.location='nombreClient.php';">	*/
 ?>


<!--SELECT .... FROM ... WHERE date BETWEEN $date1 AND $date2 -->


                        </div>
                    </div> 
					
					</div>               
						
						
						<!--  -->
			
						
		
                  
					
		</div>
	
						<!--  -->
			
	
		   
	

	<!-- end #page -->

<div id="footer">
	<!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 2012 Design by Rhimani Siham - Ecole Supérieure de Technologie d'Essaouiras</p>-->
</div>
<!-- end #footer -->
</body>
</html>