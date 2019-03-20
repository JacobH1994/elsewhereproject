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
	
	$query = "SELECT ArtTitle, ArtAddress, ArtSummary, ArtDate FROM ARTICLE WHERE ArtID = 6 ";
	$result = mysql_query($query);
	if (!$result) {
	  die('Invalid query: ' . mysql_error());
	}

?>
<div class='row logo-banner-static'>
	<div class="col-xs-4"></div>
<div class="col-xs-4">
	<img id='article-image' src="CSS/images/elsewhere_version 2.jpg" height="220px">
</div>
<div class="col-xs-4">
</div>
</div>
<div class='row'>
	<div class='col-xs-1'>
	</div>
	<div class='col-xs-9 page-main-static'>
		<br />
		<p>Elsewhere is a social journalism platform that anyone can submit to. It favours locally focussed stories with global relevance: like personal testimony of a nationally reported disaster, or reflection on the behaviour of a politician in their constituency set against their career in government.
	<br />
	<br />
        The project aims to offer globally relevant stories that are locally focussed from all over the world, written by ordinary people who are there. It wants to let you read the personal experience behind every news story on Earth.
    <br />
	<br />
		For regular updates on functionality and development, you can head over to the <a href='blog/wordpress'><u>blog</u></a>.
		<br />
		<br />
	</p>
	</div>
	<div class='col-xs-2'>
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
		
		echo	"
	<div class='row'>
		<div class='col-xs-1'>
		</div>
		<div class='col-xs-10'>
			<div id='article-summary'>";	
		
				echo $row['ArtSummary'];
				
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
		<div id='article-date'>";
            
echo $row['ArtDate'];

        echo "</div> 
			</div>
			<div class='col-xs-1'>
			</div>
			</div>";
            
	}
?>
        </div>
    </div>
</div>
<?PHP
	include("footer.php")
?>