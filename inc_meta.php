<?
require('inc_config.php');
$filePath = $_SERVER["SCRIPT_NAME"];
$getFile = explode("/", $filePath);
$fileName = $getFile[sizeof($getFile) - 1];
$getPage = explode(".", $fileName);
$PAGE = $getPage[0];
?>
<html>
<head>
<title><?= $PAGE_TITLE; ?> Naples Florida</title>
<meta name="Description" content="<?= $_COMPANYNAME; ?> is a Naples Florida Caribbean Art Galleries, Funky Boutique offering papier mache, unpainted steel drums, painted steel, coconut greeting cards, sandal cards, haitian paintings, haitian art, and more.">
<meta name="Keywords" content="Naples Florida Art Galleries, funky boutique, painted steel drums, unpainted steel drums, geko art, coconut greeting cards, paper mache paintings, haitian art, Naples Florida haitian paintings, caribbean art, caribbean paintings, unique boutique designs, Haitian Music, Artwork from The Tropics, Haitian Jewelry, Tropical Art, Tropical Artwork, Funky Jewelry, Florida Art Galleries, Fifth Avenue Naples Art Galleries, Naples Fifth Avenue">
<meta name="resource-type" content="document">
<meta name="ROBOTS" content="ALL">
<link rel="stylesheet" href="includes/style.css" type="text/css">
<script language="JavaScript" src="includes/style.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="includes/jquery.cycle.lite.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#3CE5D4" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="window.status = '<?= $_COMPANYNAME; ?> - <?= date("l - F j, Y", time()); ?>';return true">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#3CE5D4">
        <tr>
          <td><? if($PAGE == 'index'){ ?><div style="position: absolute; margin-top: 20px; margin-left: 400px;"><div class="slideshow">
    <img src="images/intro1.jpg" style="margin-top: 10px;">
    <img src="images/intro2.jpg">
    <img src="images/intro3.jpg">
    <img src="images/intro4.jpg">
    <img src="images/sun1.gif">
</div></div><? } ?><a href="index.php"><img src="images/<?= $PAGE; ?>.jpg" width="750" height="220" border="0"></a><br></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="20%" rowspan="2" align="right" valign="top"><br><img src="images/buttons.gif" width="164" height="251" border="0" usemap="#Map"><br><center>
              <? /*
               <span style="font-weight: bold; font-size: 24px;">Store Hours</span><br>
<span style="font-weight: bold; font-size: 15px;">NOON-5:00<br>Wed-Sat Only<br>
Closed May 14th & 15th
</span><br>
                <br>
                <? /*
<div style="background: #000; padding: 8px; color: #fff;">
<span style="font-size: 18px;">This month's feature</span><br>
<a href="images/300-TR-Tribal-lg.jpg"><img src="images/300-TR-Tribal-lg.jpg" width="150" style="padding: 7px 0px;"></a>
<br>
<strong>Unisex Removable Tattoo Sleeves s/m/l/xl sizes, $23.50.</strong>
</div>
*/ ?>
              </center>
              </td>
              <td width="80%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>

                  <td width="100%" align="center" valign="top"><?
function footer(){
require('inc_config.php');
$filePath = $_SERVER["SCRIPT_NAME"];
$getFile = explode("/", $filePath);
$fileName = $getFile[sizeof($getFile) - 1];
$getPage = explode(".", $fileName);
$PAGE = $getPage[0];
?>
                  </td>
                </tr>
              </table>
</td>
            </tr>
            <tr>
              <td valign="bottom"></td>
            </tr>
            <tr>
              <td align="right" valign="top">&nbsp;</td>
              <td align="center" class="fontsArial"><br>&copy; Copyright Lady From Haiti All rights reserved.<br>Site by: <a href="http://www.exploritech.com" target="_blank" class="web">Kerriosity, Co.</a> | Recommended by: <a href="http://www.kerriosity.com" target="_blank" class="web">Kerriosity.com</a><br><br></td>
            </tr>
          </table></td>
        </tr>
      </table>
</td>
  </tr>
</table>
<map name="Map">
<area shape="rect" coords="1,1,171,16" href="index.php">
<area shape="rect" coords="-9,172,173,248" href="contact_us.php">
<area shape="rect" coords="0,16,163,35" href="aboutus.php">
<area shape="rect" coords="0,34,168,52" href="unpaintedsteel.php">
<area shape="rect" coords="2,53,164,70" href="paintedsteel.php">
<area shape="rect" coords="0,70,163,86" href="haitian_paintings.php">
<area shape="rect" coords="0,85,171,102" href="papier_mache.php">
<area shape="rect" coords="1,103,167,119" href="funky_accessories.php">
<area shape="rect" coords="1,120,170,137" href="creature.php">
<area shape="rect" coords="1,136,171,152" href="greeting_cards.php">
<area shape="rect" coords="0,152,179,172" href="directions.php">
</map>
</body>
</html>
<?
}
?>