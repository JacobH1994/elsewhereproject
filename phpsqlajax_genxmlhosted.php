<?php

require("dbconnect.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("hostedmarkers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysql_connect ($servername, $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

$query = "SELECT hostedID, hostedName, hostedLat, hostedLong, hostedSummary, hostedFormat, hostedURL, hostedAddress FROM hosted_content";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");
// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){
 
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("hostedmarker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name",$row['hostedName']);
  $newnode->setAttribute("URL",$row['hostedURL']);
  $newnode->setAttribute("address", $row['hostedAddress']);
  $newnode->setAttribute("lat", $row['hostedLat']);
  $newnode->setAttribute("lng", $row['hostedLong']);
  $newnode->setAttribute("format", $row['hostedFormat']);
  $newnode->setAttribute("summ", $row['hostedSummary']);
}

echo $dom->saveXML();


?>