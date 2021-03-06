<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></meta>
<link rel="stylesheet" href="layersmenu-demo.css" type="text/css"></link>
<link rel="stylesheet" href="layersmenu-gtk2.css" type="text/css"></link>
<link rel="shortcut icon" href="LOGOS/shortcut_icon_phplm.png"></link>
<title>The PHP Layers Menu System</title>

<?php include ("libjs/layersmenu-browser_detection.js"); ?>
<script language="JavaScript" type="text/javascript" src="libjs/layersmenu-library.js"></script>
<script language="JavaScript" type="text/javascript" src="libjs/layersmenu.js"></script>

<?php
include ("lib/PHPLIB.php");
include ("lib/layersmenu-common.inc.php");
include ("lib/layersmenu.inc.php");

$mid = new LayersMenu();

//$mid->setDirroot(".");
//$mid->setLibdir("lib/");
//$mid->setLibjsdir("libjs/");
//$mid->setLibjswww("libjs/");
//$mid->setImgdir("images/");
//$mid->setImgwww("images/");
//$mid->setTpldir("templates/");
//$mid->setVerticalMenuTpl("layersmenu-vertical_menu.ihtml");
//$mid->setSubMenuTpl("layersmenu-sub_menu.ihtml");

//$mid->setDownArrowImg("down-arrow.png");
//$mid->setForwardArrowImg("forward-arrow.png");
$mid->setMenuStructureFile("layersmenu-horizontal-1.txt");
$mid->parseStructureForMenu("vermenu1");
$mid->newVerticalMenu("vermenu1");

$mid->printHeader();
/* alternatively:
$header = $mid->makeHeader();
print $header;
*/
?>

</head>
<body>

<div class="normalbox">
<div class="normal" align="center">
<b>A file-based example with a Vertical Layers Menu</b>
</div>
</div>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="20%" valign="top">
<div style="height: 3px"></div>
<?php
$mid->printMenu("vermenu1");
/* alternatively:
$vermenu1 = $mid->getMenu("vermenu1");
print $vermenu1;
*/
?>
<br />
<center>
<a href="http://phplayersmenu.sourceforge.net/"><img border="0"
src="LOGOS/powered_by_phplm.png" alt="Powered by PHP Layers Menu" height="31" width="88" /></a>
</center>
<br />
<center>
<a href="http://validator.w3.org/check/referer"><img border="0"
src="images/valid-xhtml10.png" alt="Valid XHTML 1.0!" height="31" width="88" /></a>
</center>
<br />
<center>
<a href="http://jigsaw.w3.org/css-validator/"><img border="0"
src="images/vcss.png" alt="Valid CSS!" height="31" width="88" /></a>
</center>
</td>
<td valign="top">
<div class="normalbox">
<div class="normal">
<?php include ("README.ihtml"); ?>
</div>
</div>
</td>
</tr>
</table>

<?php
$mid->printFooter();
/* alternatively:
$footer = $mid->makeFooter();
print $footer;
*/
?>

</body>
</html>
