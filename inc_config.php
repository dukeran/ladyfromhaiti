<?
$DBNAME = 'ladyfromhaiti';
$db = mysql_connect("localhost","root","ladyfromhaiti");
mysql_select_db("$DBNAME", $db);
$IMG = 'images/';
$INC = 'includes/';
$_DOMAIN = 'http://www.ladyfromhaiti.com';
$_SITENAME = 'ladyfromhaiti.com';
$EMAILADMIN = 'info@ladyfromhaiti.com';
$_COMPANYNAME = 'The Lady from Haiti, LLC';
$_PHONE = '239.649.8607';
$_FAX = '';
$_TOLLFREE = '';
$_COMPANYADD = '11902 Bonita Beach Rd.';
$_LOCATION = 'Bonita Springs, FL 34135';

$GET_MAP = 'http://maps.google.com/maps?oi=map&q='.$_COMPANYADD.','.$_LOCATION.'';
?>