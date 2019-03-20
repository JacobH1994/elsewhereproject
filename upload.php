<?PHP
	include("header.php");
?>
<div class='row logo-banner-static'>
	<div class="col-xs-4"></div>
<div class="col-xs-4">
	<img id='article-image' src="CSS/images/elsewhere_version 2.jpg" height="220px">
</div>
</div>
<div>
    <div class='row'>
	<div class='col-xs-0 col-sm-1'>
	</div>
	<div class='page-main-static col-xs-12 col-sm-10'>
        <p>Uploading to the map? Hell yeah! When you submit the form below, your article will be send to the editing team behind the project for grammatical checking and potentially some feedback for you on tweaks we'd like to see. The best content for the Elsewhere project is locally focussed, but globally relevant. Extra points will be given for first-hand experiences that challenge perceptions of a place, person, time - anything really.
        <br />
        <br />
        Last but not least - it's super important to give us either a latitude and longitude, or a location for where your article appears. Otherwise, we won't know where to put it on the map. You can choose anywhere in the world.
        <br />
        <br />
        </p>
        </div>
        <div  class="col-xs-o col-sm-1">
        </div>
    </div>
<div class='row'>
	<div class='col-xs-0 col-sm-2'>
	</div>
	<div class='page-main-static col-xs-12 col-sm-8'>
        <form name="contactform" method="post" action="send_form_email.php">
<table width="auto">
<tr>
 <td valign="top" class="formtag">
  <label for="first_name">Author's First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top" class="formtag">
  <label for="last_name"> Author's Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top" class="formtag">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top" class="formtag">
  <label for="telephone">Article Title *</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
   <tr>
 <td valign="top" class="formtag">
  <label for="location">Article Location *</label>
 </td>
 <td valign="top">
  <input  type="text" name="location" maxlength="60" size="30">
 </td>
</tr> 
<tr>
 <td valign="top">
  <label for="comments" class="formtag">Article Content *</label>
 </td>
    <tr></tr>
    <tr>
 <td valign="top" colspan="2">
  <textarea  name="comments" maxlength="50000" cols="65" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" class="articlesubmit">
 </td>
    </tr>
    <tr>
        <td>
    <p><br /><br /></p>
        </td>
    </tr>
</table>
</form>
    </div>
	<div class='col-xs-0 col-sm-2'>
	</div>
</div>
<?PHP
	include("footer.php")
?>