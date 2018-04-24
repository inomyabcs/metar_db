<html>
<head>
<title>NW METAR Lookup</title>
</head>

<body>

<p>Welcome to the Northwest METAR Lookup page. This page is experimental and only has limited options. 
Currently the database only holds the date and not the time. As you also may have noticed this is only
for the Northwest and not for the rest of the zones. This is only for the interim until I determine how 
much space this will take up.</p>

<p>To get started select the base below or enter the ICAO in the space provided. Then enter the starting date you wish to start with and then the
ending date. Enter the date in YYYYMMDD format. Recordset begins 20040306, there are no records starting before this date.</p>

<form method="post" action="lookup.php">

  <p><a href="icao.txt" target="_blank">ICAO</a>: 
  	<input type="text" maxlength="4" size="10" name="base">
  
  <p>Start Date: 
    <input type="text" maxlength="8" size="10" name="begin">
  End Date: 
    <input type="text" maxlength="8" size="10" name="end">
  </p>
  <p>
    <input type="submit" name="submit">
</p>
</form>

<p>
Update List: </p>
<p>6 Mar 2004 - Went live with METAR database for Northwest Zone<br>
   8 Mar 2004 - Changed ICAO input to a drop down list for bases available.<br>
9 Mar 2004 - Added Southwest and East bases to the database script. Bases are in database and will be added to this page later.<br>
10 Mar 2004 - Added base selection list by region. Also readded the ICAO input box for more options. East drop down still needs work.<br>
14 Mar 2004 - Drop down list was not working with script. Removed the drop down and kept ICAO input. Added station file for bases covered.
<script src="../scripts/address2.js"></script>
</p>
</body>
</html>
