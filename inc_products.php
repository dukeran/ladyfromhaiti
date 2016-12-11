
<style>
.sold {color: #004799; font-weight: bold; font-size: 16px; font-family:Arial, Helvetica, sans-serif;}
.sale {color: #FF0000; font-weight: bold; font-size: 16px; font-family:Arial, Helvetica, sans-serif;}
img{
	max-width:100%;
}
</style>

<table width="100%" border="0" cellspacing="3" cellpadding="3">
<?php if($cat == 'haitian'){ ?>
<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="images/img.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>

</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="images/img2.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>

</tr>
<tr>
<td>&nbsp;</td>
</tr>

<?php } ?>
<tr>
<?
$return = mysql_query("select * from products WHERE cat = '$cat'");
for($jx = 0; $jx < mysql_num_rows($return); $jx++){ $row = mysql_fetch_array($return);
if($jx % 3 ==0 && $jx != 0){
?>
<!--</tr>-->

<? } ?>
<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/<? echo $row['pic_name']; ?>_lg.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
<?
if(!$row['title']){ 
}else{
print ''.$row['title'].'';
}
if($row['size']){ 
print '<br>'.$row['size'].'<br>';
}
if($row['price']){ 

$price1 = ''.str_replace('SOLD', '<span class="sold">SOLD</span>', $row['price']).'';
$price2 = ''.str_replace('SALE', '<span class="sale">SALE</span>', $price1).'';

print ''.$price2.'';
}
?>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<? } ?>
<?php if($cat == 'haitian'){ ?>
<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_04_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
Clark Constant, Tired Donkey 18x24, was $310 - now $165
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>



<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_05_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
Clark Constant, 20x24, Lush Life, was $335 - now $175
</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>



<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_07_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
15.5x20, Cats Under Tree of Life, Emmanuel Pierre-Louis WAS $215 - NOW $115
</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_08_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
40x30, Dense Blue Market Day, Nono WAS $380 - NOW $230   
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_09_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
38.5x29, Birds in the Jungle, Petit Frere Donald WAS $425 - NOW $315  
</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_10_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
38x21, Blue Dreamscape, Alfred Frenold WAS $425 - NOW $310
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_15_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
 20x24, Tomato Fields, Widler Germain WAS $285 - NOW $160 
</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_16_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
24x30, Gossip, Alcide WAS $320 - NOW $160 
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_19_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
20x16, Blue-Eyed Tiger Under the Tree of Life, Maxo Pierre WAS $475 - NOW $450   </td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>




<tr>
<td align="center"><TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
  <TR>
    <TD><IMG SRC="images/image_0.jpg" WIDTH="6" HEIGHT="8"></TD>
    <TD background="images/image_1.jpg"><IMG SRC="images/image_1.jpg" WIDTH="1" HEIGHT="8"></TD>
    <TD><IMG SRC="images/image_2.jpg" WIDTH="7" HEIGHT="8"></TD>
  </TR>
  <TR>
    <TD background="images/image_3.jpg"><IMG SRC="images/image_3.jpg" WIDTH="6" HEIGHT="1"></TD>
    <TD><!--<a href="javascript:;" onClick="MM_openBrWindow('view_image.php?id=<?= $row['id'] ?>','','width=375,height=430')">--><img border="0" src="products/haitan_21_sm.jpg"><!--</a>--></TD>
    <TD background="images/image_5.jpg"><IMG SRC="images/image_5.jpg" WIDTH="7" HEIGHT="1"></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/image_6.jpg" WIDTH="6" HEIGHT="6"></TD>
    <TD background="images/image_7.jpg"><IMG SRC="images/image_7.jpg" WIDTH="1" HEIGHT="6"></TD>
    <TD><IMG SRC="images/image_8.jpg" WIDTH="7" HEIGHT="6"></TD>
  </TR>
</TABLE>
 20x24, Pears, Clervil WAS $280 - $150</td>
</tr>


<tr>
<td>&nbsp;</td>
</tr>
<?php } ?>
</tr>
</table>