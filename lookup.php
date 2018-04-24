<html>
<head>
<title><?php echo $_POST['base']; ?> METAR Output</title>
</head>

<body>

<?php

$db = mysql_connect("localhost", "root", "goofy");
if (!$db) { 
echo( "<p>Unable to connect to the " . 
"database server at this time.</p>" ); 
exit(); 
} 

$dbSelected = mysql_select_db("wxdb", $db);
if (! @mysql_select_db("wxdb") ) {
echo( "<p>Unable to locate the wxdb " . 
"database at this time.</p>" ); 
exit(); 
} 

$strBase = $_POST['base'];
$strBegindate = $_POST['begin'];
$strEnddate = $_POST['end'];
$dbQuery = "SELECT DISTINCT metar FROM metar WHERE metar like '$strBase%' and (date between $strBegindate and $strEnddate)";
$dbQueryResult = mysql_query($dbQuery, $db);
if (!$dbQueryResult) { 
  echo("<p>Error performing query: " . mysql_error() . 
"</p>"); 
  exit(); 
}  

echo '<p>';

while ( $row = mysql_fetch_array($dbQueryResult) ) { 
  echo($row["metar"] . 
"<br>"); 
}

echo '</p>';

?>


<p>Perform another <a href="wxdb.php">search</a>?</p>

<script src="../scripts/address2.js"></script>

</body>
</html>