<?php 
$erreur='';
// Couleur du texte des champs si erreur saisie utilisateur
$color_font_warn="#FF0000";
// Couleur de fond des champs si erreur saisie utilisateur
$color_form_warn="#FFCC66";
// Ne rien modifier ci-dessous si vous n’êtes pas certain de ce que vous faites !
if(isset($_POST['submit'])){
	$erreur="";
	// Nettoyage des entrées
	while(list($var,$val)=each($_POST)){
	if(!is_array($val)){
		$$var=strip_tags($val);
	}else{
		while(list($arvar,$arval)=each($val)){
				$$var[$arvar]=strip_tags($arval);
			}
		}
	}
	// Formatage des entrées
	$f_1=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèà??\ -]", "", $f_1)));
	$f_2=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèà??\ -]", "", $f_2)));
	$f_3=strip_tags(trim($f_3));
	// Verification des champs
	if(strlen($f_3)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; E-mail &raquo; est vide ou incomplet.</span>";
		$errf_3=1;
	}else{
		if(!ereg('^[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+'.
		'@'.
		'[-!#$%&\'*+\/0-9=?A-Z^_`a-z{|}~]+\.'.
		'[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+$',
		$f_3)){
			$erreur.="<li><span class='txterror'>La syntaxe de votre adresse e-mail n'est pas correcte.</span>";
			$errf_3=1;
		}
	}
	if(strlen($f_5)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Message &raquo; est vide ou incomplet.</span>";
		$errf_5=1;
	}
	if($erreur==""){
		// Création du message
		$titre="Contact hotel kasbah";
		$tete="From:hotel kasbah";
		$corps="Nom : ".$f_1."\n";
		$corps.="Prénom : ".$f_2."\n";
		$corps.="E-mail : ".$f_3."\n";
				$corps.="Message : ".$f_5."\n";
		if(mail("fati_enmili@hotmail.fr", $titre, stripslashes($corps), $tete)){
			$ok_mail="true";
		}else{
			$erreur.="<li><span class='txterror'>Une erreur est survenue lors de l'envoi du message, veuillez refaire une tentative.</span>";
		}
	}
}
?>
<html>
<head>
<title>kasbah</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #40270A;
}
body {
	background-color: #40270A;
	background-image: url(img/back_04.gif);
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #000000;
	text-decoration: underline;
}
a:active {
	color: #000000;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
.style1 {font-size: 18px}
.style2 {
	color: #CAA672;
	font-weight: bold;
}
.style4 {
	font-size: 16px;
	font-weight: bold;
}
.Style7 {font-size: 12px}
.Style12 {color: #FF0000}
-->
</style>

<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">
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

<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/kasbah_10.gif','images/kasbah_11.gif','images/kasbah_12.gif','images/kasbah_13.gif','images/kasbah_14.gif','images/kasbah_15.gif')">
<!-- ImageReady Slices (kasbah.psd) -->
<table width="800" height="702" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ECE9D8" id="Table_01">
<tr>
		<td colspan="6"><img src="images/kasbah_01.gif" width="800" height="203" alt=""></td>
	</tr>
	<tr>
		<td><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','images/kasbah_10.gif',1)"><img src="images/kasbah_02.gif" alt="Acceuil" name="Image9" width="118" height="37" border="0"></a></td>
		<td><a href="Chambres.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/kasbah_11.gif',1)"><img src="images/kasbah_03.gif" alt="Chambres" name="Image10" width="144" height="37" border="0"></a></td>
		<td><a href="Activites.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','images/kasbah_12.gif',1)"><img src="images/kasbah_04.gif" alt="Activités" name="Image11" width="126" height="37" border="0"></a></td>
		<td><a href="Galerie.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','images/kasbah_13.gif',1)"><img src="images/kasbah_05.gif" alt="Galerie" name="Image12" width="114" height="37" border="0"></a></td>
		<td><a href="Reservation.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','images/kasbah_14.gif',1)"><img src="images/kasbah_06.gif" alt="Réservation" name="Image13" width="170" height="37" border="0"></a></td>
		<td><a href="Contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image14','','images/kasbah_15.gif',1)"><img src="images/kasbah_07.gif" alt="Contact" name="Image14" width="128" height="37" border="0"></a></td>
	</tr>
	<tr>
		<td height="439" colspan="6" valign="top" bgcolor="#CC7617">
		  
          <div align="center">            <br>
            <br>
              <br>
                <table width="569" height="27" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center"><span class="Style7"><span class="style2">Hôtel Kasbah</span> <strong>est en mesure  de mieux répondre à vos rêves et à vos désirs.</strong></span></td>
                  </tr>
                </table>
            <br>
            <table width="609" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><form name="form1" method="post" action="">
                  <table width="580" height="235" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="116" height="26" valign="top"><div align="right"><strong> Nom <span class="Style12">* </span>:&nbsp;&nbsp;</strong></div></td>
                      <td width="464" valign="top"><span id="sprytextfield1">
                        <label>
                        <input type="text" name="f_1" id="f_1" style="width:100px; height:18;">
                        </label>
                        <span class="textfieldRequiredMsg">Une valeur est requise.</span></span> </td>
                    </tr>
                    <tr>
                      <td height="25" valign="top"><div align="right"><strong> Prenom :&nbsp;&nbsp;</strong></div></td>
                      <td valign="top"><label>
                        <input type="text" name="f_2" id="f_2" style="width:100px; height:18;">
                        </label>                      </td>
                    </tr>
                    <tr>
                      <td height="26" valign="top"><div align="right"><strong>Email <span class="Style12">* </span>:&nbsp;&nbsp;</strong></div></td>
                      <td valign="top"><span id="sprytextfield2">
                        <label>
                        <input name="f_3" type="text" id="f_3"  style="width:100px; height:18;">
                        </label>
                        <span class="textfieldRequiredMsg">Une valeur est requise.</span><span class="textfieldInvalidFormatMsg">Format non valide.</span></span> </td>
                    </tr>
                    <tr>
                      <td height="134" valign="top"><div align="right"><strong>Message <span class="Style12">* </span>:&nbsp;&nbsp;</strong></div></td>
                      <td valign="top"><span id="sprytextarea1">
                        <label>
                        <textarea name="f_5" id="f_5" cols="50" rows="8" style="width:260px; "></textarea>
                        </label>
                        <span class="textareaRequiredMsg">Une valeur est requise.</span></span> </td>
                    </tr>
                    <tr>
                      <td height="24"><div align="center"></div></td>
                      <td><label>
                        <input name="submit" type="submit" id="submit" value="Envoyer">
                        </label>
                          <div align="center"></div></td>
                    </tr>
                                                                        </table>
                                </form>
                </td>
              </tr>
            </table>
            <br>
            <table width="488" height="32" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="right">Les champs marqués d'une <span class="Style12">*</span> sont obligatoire.</div></td>
              </tr>
            </table>
            <table width="487" height="91" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center" valign="top"><img src="img/adresse-3.gif" alt="adresse 3" width="375" height="94"></td>
              </tr>
            </table>
            <br>
      </div></td>
  </tr>
	<tr>
		<td colspan="6">
			<img src="images/kasbah_09.gif" width="800" height="23" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>