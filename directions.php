<?
$PAGE_TITLE = 'Directions';
require('inc_meta.php');
?>
<table width="89%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td colspan="2"><img src="images/directions.gif" width="367" height="43"></td>
  </tr>
  <tr>
    <!--<td width="54%"><img src="images/map.jpg" width="284" height="304"> </td>
-->    <td width="46%" align="center"><strong>IN A GREAT NEW LOCATION<br />
      at 612 FIFTH AVE. SOUTH <br />

    </strong>
      <? /*
<br><br>
      <?= $_COMPANYNAME; ?>
      <br>
    <?= $_COMPANYADD; ?>
      <br>
      <?= $_LOCATION; ?>
*/ ?>

<br>
<b><br>
Phone:<br>
<br>
      </b><?= $_PHONE; ?>
      <br>
      <br>
      <b>Email:</b><br>      <br>
      <a href="mailto:<?= $EMAILADMIN; ?>">
      <?= $EMAILADMIN; ?>
      </a><br>
    <br>
    <br>
    
    <a href="https://www.google.com/maps/preview#!q=612+FIFTH+AVE.+SOUTH+naples+florida" target="_blank"><img src="images/mapclickhere.gif" width="223" height="34" border="0"></a>
    
    </td>
    
  </tr>
</table>
<? footer(); ?>
