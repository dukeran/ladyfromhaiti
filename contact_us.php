<?
$PAGE_TITLE = 'Contact Us';
require('inc_meta.php');
session_start();

// for image verification //
$number = strtoupper($_POST['txtNumber']);

$error = array();
if($form)
{
	
	//image verification code //
if(!trim($number)){ $error[] = "txtNumber"; }
	else{ if(md5($number) != $_SESSION['image_random_value']){ $error[] = "txtValid"; }
}
if(!trim($c_name)){ $error[] = "c_name"; }
if(!trim($email)){ $error[] = "email"; }
else{ if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@([0-9a-z](-?[0-9a-z])*\.)+[a-z]{2}([zmuvtg]|fo|me)?$",$email)){ $error[] = "emailValid"; } }
}


if($form && !$error)
{
	
//image verification code //
if(md5($number) == $_SESSION['image_random_value']){

$contents = "Name: $c_name
Address:
$c_address
$c_city, $c_state $c_zip
Phone: $c_phone
Fax: $c_fax
Email: $email
Questions / Comments: $comments";

mail("$EMAILADMIN","$_COMPANYNAME email from $c_name","$contents","From: $c_name<$email>");

$status = "Thank You, <b>$c_name</b><br><br>";
$status .= "Your e-mail message has been sent. We will contact you shortly about your inquiry. ";
$status .= "If you need more assistance or have questions, please call. <b>$_PHONE</b><br><br>";
$status .= "Thank You,<br><b>$_COMPANYNAME</b><br>";
}}
?>
<table width="89%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td><img src="images/contact_us.gif" width="367" height="43"></td>
  </tr>
  <tr>
    <td><? if(!$status){ ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <form name="form" method="post" action="<?= $PHP_SELF; ?>">
          <tr>
            <td width="100%" valign="top">
              <table width="100%" border="0" cellspacing="1" cellpadding="3">
                <tr>
                  <td colspan="2" valign="top"><font color="#FF0000">*</font> =
                    Required Fields</td>
                </tr>
                <tr>
                  <td width="57%" valign="top">
                    <? 
					if(in_array("c_name", $error))
					{ 
						echo "
							  <font color=\"#ff0000\">
							  Please enter a Full Name:
							  </font>
						";
					}
					else
					{
						echo "
							Name:
						";
					}
	
				?>
                    <br>
                    <input type="text" name="c_name" value="<? echo $c_name; ?>" size="30">
                    <font color="#FF0000">*</font></td>
                  <td width="43%" valign="top"> Address:<br>
                      <input type="text" name="c_address" value="<? echo $c_address; ?>" size="30">
                  </td>
                </tr>
                <tr>
                  <td width="57%" valign="top">
                    <? 
					if(in_array("email", $error))
					{ 
						echo "
							  <font color=\"#ff0000\">
							  Please enter a Email Address:
							  </font>
						";
					}
					elseif(in_array("emailValid", $error))
					{
						echo "
							  <font color=\"#ff0000\">
							  Email Address is Invalid:
							  </font>
						";
					}
					else
					{
						echo "
							Email Address:
						";
					}
	
				?>
                    <br>
                    <input type="text" name="email" value="<? echo $email; ?>" size="30">
                    <font color="#FF0000">*</font></td>
                  <td width="43%" valign="top"> City:<br>
                      <input type="text" name="c_city" value="<? echo $c_city; ?>" size="30">
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="57%">Phone:<br>
                      <input type="text" name="c_phone" value="<? echo $c_phone; ?>" size="30">
                  </td>
                  <td valign="top" width="43%"> State:<br>
                      <select name="c_state">
                        <option> <? echo $c_state; ?> </option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="DC">Washington, D.C.</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="57%">Fax:<br>
                      <input type="text" name="c_fax" value="<? echo $c_fax; ?>" size="30">
                  </td>
                  <td valign="top" width="43%">Zip:<br>
                      <input type="text" name="c_zip" value="<? echo $c_zip; ?>" size="30">
                  </td>
                </tr>
                <tr>
                  <td valign="top"> Questions / Comments:<br>
                      <textarea name="comments" wrap="VIRTUAL" cols="40" rows="10"><?= $comments; ?>
                            </textarea>
                      <br />
                      <br />
                      <? 

					if(in_array("txtNumber", $error))
					{ 
						echo "<font color=\"#EE3124\">Please enter the code to continue. </font>";
					}
					elseif(in_array("txtValid", $error))
					{
						echo "
							  <font color=\"#EE3124\">
							  Code is invalid, try again. 
							  </font>
						";
					}
					else
					{
						echo "Please enter the code to continue. ";
					}
			 ?>
                      <input name="txtNumber" type="text" id="txtNumber" value=""  class="security" />
                      <? print '<img src="randomImage.php" align="absmiddle" />'; ?> <br>
                      <br>
                      <input type="image" border="0" name="imageField" src="images/submit.gif" alt="Submit" class="select">
                      <input type="hidden" name="form" value="1">
                  </td>
                  <td valign="top"><? /*
<b>As of October 2013 the NEW LOCATION of the store is:</b>

      <br />
      <br />
      AT 110 TENTH ST. NORTH<br />
IN THE DESIGN DISTRICT OF OLD NAPLES<br />
(parallel to and one block EAST of US 41, one block NORTH of Central Ave.)<br /><br ?>
<b>
*/ ?>
              <br />
<br />
<b>Phone:</b>
              <?= $_PHONE; ?>
              <br><br />

              <b>Email:</b>
              <a href="mailto:<?= $EMAILADMIN; ?>">
              <?= $EMAILADMIN; ?>
            </a></td>
                </tr>
              </table>
            </td>
          </tr>
        </form>
      </table>
      <? }else{ ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td> <? echo $status; ?> <br>
                    <br>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <br>
      <? } ?> </td>
  </tr>
</table>
<? footer(); ?>
