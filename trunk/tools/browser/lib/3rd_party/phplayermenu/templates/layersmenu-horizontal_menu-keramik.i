<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"></meta>
<title>The PHP Layers Menu - Templates</title>
<link rel="StyleSheet" href="../layersmenu.css" type="text/css"></link>
</head>
<body>

<pre>
This is a horizontal menu template.
This comment does not appear on the resulting page.

If you eliminate the external table, the menu bar extends fills
horizontally the browsing window.
--
</pre>

<!-- BEGIN template -->

<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<div class="khorbar">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<!-- BEGIN horizontal_menu_cell -->
<td>
<!-- BEGIN cell_link -->
<div id="{menu_layer_label}" class="khorbaritem" onmouseover="clearLMTO();" onmouseout="setLMTO();">
<a href="{href}"{onmouseover}{title}{target}><img
align="top" src="{imgwww}{transparent}" width="1" height="16" border="0"
alt="" /><!-- BEGIN cell_icon --><img
align="top" src="{imgwww}{iconsrc}" width="{iconwidth}" height="{iconheight}" border="0"
alt="{iconalt}" />&nbsp;<!-- END cell_icon -->{text}<!-- BEGIN cell_arrow -->&nbsp;<img
src="{imgwww}{downsrc}" width="{downwidth}" height="{downheight}"
border="0" alt=">>" /><!-- END cell_arrow -->&nbsp;&nbsp;&nbsp;</a>
</div>
<!-- END cell_link -->
</td>
<!-- END horizontal_menu_cell -->
</tr>
</table>
</div>
</td>
</tr>
</table>

<!-- END template -->

</body>
</html>
