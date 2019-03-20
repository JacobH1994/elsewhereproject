<?PHP

	include("header.php");
	include("dbconnect.php");

	// Opens a connection to a MySQL server

	$connection=mysql_connect ($servername, $username, $password);
	if (!$connection) {  die('Not connected : ' . mysql_error());}

	// Set the active MySQL database

	$db_selected = mysql_select_db($database, $connection);
	if (!$db_selected) {
	  die ('Can\'t use db : ' . mysql_error());
	}
	
	$ArtID = $_GET['ID'];
	
	$query = "SELECT ArtTitle, ArtAddress, ArtBodyText, ArtAuthor, ArtCurator, ArtDate, ArtBannerImg FROM ARTICLE WHERE ArtID = $ArtID ";
	$result = mysql_query($query);
	if (!$result) {
	  die('Invalid query: ' . mysql_error());
	}

?>

<div class='row logo-banner'>
	<div class="col-xs-4"></div>
<div class="col-xs-4" id="article-title-image">
	<img id='article-image' src="CSS/images/elsewhere_version 2.jpg" height="220px">
</div>
<div class="col-xs-4">
</div>
</div>
<?PHP

    echo "
<div class='row'>
	<div class='col-xs-1'>
	</div>
	<div class='col-xs-10'>
			<div id='article-title'>";
		
		while($row = mysql_fetch_array($result)){
		echo $row['ArtTitle'];

	echo "</div>
		</div>
		<div class='col-xs-1'>
		</div>
</div>
	";
    echo "
<div class='row'>
	<div class='col-xs-0'>
	</div>
	<div class='col-xs-12'>
			<div id='article-banner-img'>";
		echo $row['ArtBannerImg'];

	echo "<br /><br /></div>
		</div>
		<div class='col-xs-0'>
		</div>
</div>
	";
		
		echo	"
	<div class='row'>
		<div class='col-xs-1'>
		</div>
		<div class='col-xs-10'>
			<div id='article-text'>";	
		
				echo $row['ArtBodyText'];
				
		echo	"</div>
		</div>
		<div class='col-xs-1'>
		</div>
		</div>

	<div class='row'>
		<div class='col-xs-1'>
		</div>
		<div class='col-xs-10'>
		<div id='article-author'>";
		
			echo $row['ArtAuthor'];
		
		echo "</div> 
			</div>
			<div class='col-xs-1'>
			</div>
			</div>

			<div class='row'>
			<div class='col-xs-1'>
			</div>
			<div class='col-xs-10'>
			<div id='article-curator'>
			";
			
			echo $row['ArtCurator'];
			
			echo "</div>
				</div>
				<div class='col-xs-1'>
				</div>";
	
	}
?>


<div class="row">
	<div class='col-sm-4'>
	</div>
	<div class='col-sm-4'>
	</div>
	<div class='col-sm-4 col-xs-12'>

	</div>
</div>
<?php
include("footer.php");
?>