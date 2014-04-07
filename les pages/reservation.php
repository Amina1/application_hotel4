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


$query_rsreservation = "SELECT * FROM  reservation";
$rsreservation = mysql_query($query_rsreservation, $connect) or die(mysql_error());
$row_rsreservation = mysql_fetch_assoc($rsreservation);
$totalRows_rsreservation = mysql_num_rows($rsreservation);


$colname_rsreservation = "-1";
if (isset($_POST['id_reserv'])) {
  $colname_rsreservation = $_POST['id_reserv'];
}
?>
	


<html xmlns="http://www.w3.org/1999/xhtml">
<head> <title>Hotel  </title>
</script>
<script type="text/javascript" src="../includes/common/js/sigslot_core.js"></script>
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script type="text/javascript" src="../includes/wdg/classes/MXWidgets.js"></script>
<script type="text/javascript" src="../includes/wdg/classes/MXWidgets.js.php"></script>
<script type="text/javascript" src="../includes/wdg/classes/Calendar.js"></script>
<script type="text/javascript" src="../includes/wdg/classes/SmartDate.js"></script>
<script type="text/javascript" src="../includes/wdg/calendar/calendar_stripped.js"></script>
<script type="text/javascript" src="../includes/wdg/calendar/calendar-setup_stripped.js"></script>
<script src="../includes/resources/calendar.js"></script>
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="../jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.gallerax-0.2.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />

</style>
</head>

<div id="header">
<div class="row-1">
<div id="wrapper">

<h1>"Hotel Star"</h1>
 <img src="hot.jpg" alt="hotel" width="950px" height="252px" style="margin-left: 13px; margin-top: 13px;" />
	<ul class="nav">
		<li><a href="../index.php" >ACCUEIL</a></li>
			<li><a href="chambres.php">CHAMBRES & TARIFS</a></li>
		 <li><a href="../restaurant.php" >RESTAURANT</a></li>
			<li><a href="reservation.php"  class="current">RESERVATION</a></li>
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




</head>
	

			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						
							
								
						
						<!-- end -->
						</div>
					<div class="post">
					<br><br><br>
						
						<h2 class="title1">FORMULAIRE DE RESERVATION</h2>
					
						<div class="entry">
						 <div class="espace2"> </div> <div class="formu4"><p>

						  <? if($ok_mail=="true"){ ?>
						  <tt><?echo nl2br(stripslashes($corps));?></tt>
						    <? }else{ ?>
                                        
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
      }                       </script>
                                               <form action="ajouter_reserv.php" method="post" name="Form" id="Form" onSubmit="return test(this.email)" >
                                                     <? if($erreur){ ?>
                                                    <?}?>
													
<input name="id_reserv" type="hidden" class="Style18" id="f_1" size="21" />


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Nom <font color="#fc04ec">:</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="nom"   class="inn" size="22%" style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS"  type="text" class="Style18" id="f_1" size="21" />

<br><br>

											
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E_mail<font color="#fc04ec">*: &nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input name="email"  class="inn"size="22%" style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS"  type="text" class="Style18" id="f_3" size="21" /><br><br>
                                                   
			

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <font color="black">Date d'arriv&eacute;e  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="date_depart" class="inn"size="22%" style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS"  id="f_8" value="" size="21" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:mondayfirst="true" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" /></td>
                                   <br><br>

&nbsp;&nbsp;&nbsp;
 <font color="black">Date de d&eacute;part:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
 <input name="date_arrive"  class="inn" size="22%"  style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS" onclick="this.value=''"  id="dated" value="" size="9" wdg:mondayfirst="true" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" />
                                   <br><br>									 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Type de chambre:
&nbsp;&nbsp;
                              
<select name="type" class="Style18" style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS"   id="f_9">
<option>----- Sélectionnez -----</option>
  <option value="single">Single</option>
                                                          <option value="souble">Double</option>
                                                          <option value="tripe">Triple</option></select>  	<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Adulte(s):&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="adulte" class="Style18" style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS"   id="f_9">
<option>----- Sélectionnez -----</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option></select>		<br><br>
	


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Enfant(s):&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="enfant" class="Style18"  style="border:3px solid #D2691E; color:#0000FF font:Comic Sans MS"  id="f_8">
<option>----- Sélectionnez -----</option>
  <option value="0">0</option>
<option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
   </select>		<br><br>
   

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="#fc04ec">* champs obligatoires   

<br><br>

                                                     
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' class="in" name='submit' value='Réserver' > 

<input class="in" type="reset" name="Effacer" value="Effacer">

</form>

						</p></p></div></div>
<!-- End ImageReady Slices -->
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom");
//-->
</script>
					</div>
	
					</div>
					 
				</div>
				<!-- end #content -->
				<br><br>
					
    


	   

		




</form>


     

        

        </div>

<form action="recherch.php" method="GET"> 
<div>                            
<!--<h5>&nbsp;&nbsp;Date d'arrivée: &nbsp;&nbsp;&nbsp;Date de d&eacute;part:</h5>
	&nbsp;&nbsp;<input name="date_arrive" class="Style8" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" id="dated" value="" size="9" wdg:mondayfirst="true" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" />
</label><label></label>
<input name="date_depart" class="Style8" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" id="dater" value="" size="9" wdg:mondayfirst="true" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" /></td>
<br>
<br>-->
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


					


<?php
 
  
/*$req2="select * from categorie C where C.type = '$type'
AND id_categorie NOT IN (
 select id_categorie
  from reservation R 
 where R.date_arrive > '$date_arrive'
  and R.date_depart < '$date_depart'
)";*/

/*$req2="select * from categorie";
$sel2=mysql_query($req2);
echo		'<label for="type de chambre :"> &nbsp;&nbsp;&nbsp;&nbsp;type de chambre:  </label>';
echo        '<select name="id_categorie" class="Style8" type="text" style="border:3px solid #FFA500; color:#0000FF font:Comic Sans MS" >';
while($fin2=mysql_fetch_row($sel2)){
echo		"<option id='type de chambre:' value=$fin2[0]>$fin2[1]</option>";}
echo    	'</p>';
echo        '</select>';*/
////

//$nb =$_Get['num_chambre']; 
//$sql = "Update chambre set disponibilite=oui where num_Chambre= $nb"; 









?>  
<br/>


</form>
</div>	

 
 




						                     
                     
                    </div> 
					
					</div>               
						
						
						<!--  -->
							
				<div class="espace1"></div>
						
		
                  
					<div class="espace2"></div>
		</div>
	
						<!--  -->
				<div style="clear: both;">&nbsp;</div>
	
		   
	
<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.php">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/chambres.php">Chambres & Tarifs</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/reservation.php">Réservation</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="../les pages/inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;
	
	</p>
	<!-- end #page -->
</div>
<div id="footer">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 2014 Design by Amina LAMGUIGUIZE - Faculté polydisciplinaire de Tétouan</p>
</div>
<!-- end #footer -->
