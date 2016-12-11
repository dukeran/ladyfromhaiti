<?
require('inc_config.php');
$return = mysql_query("select * from products WHERE id = '$id'");
$row = mysql_fetch_array($return);
?>
<html>
<head>
<title><?= $_COMPANYNAME; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#3CE5D4">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">
      <TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
      <TR>
        <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
        <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
        <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
      </TR>
      <TR>
        <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
        <TD><a href="javascript:self.close()"><img border="0" src="products/<? echo $row['pic_name']; ?>_lg.jpg"></a></TD>
        <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
      </TR>
      <TR>
        <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
        <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
        <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
      </TR>
    </TABLE><? if(!$row['title']){ ?><? }else{ ?><?= $row['title'] ?><? } ?>
    <br><br>
    <a href="javascript:self.close()">close window</a></td>
  </tr>
</table>
</body>
</html>