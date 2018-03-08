<html>
<title> Doxed</title>
<meta http-equiv="refresh" content="3;url=index.php" />
<head>
<link rel="stylesheet" type="text/css" href="Style/style.css"></link>
</head>
<body>
<logo><center><img src="Style/Linked-logo.png" width="400px"
    height="200px" alt="" /></center></logo>
<center><h3>Redirecting in 3 seconds...</h3></center>
</form>
</body>

</html>
<?php

$con = mysql_connect("", "", "") or die("Error connecting to database: ".mysql_error());

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("", $con);

 

$sql="INSERT INTO data (name, Phone, Profile)

VALUES

('$_POST[name]','$_POST[Phone]','$_POST[Profile]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "<center><h3>Doxed Successfull</h3></center>";


mysql_close($con)

?>