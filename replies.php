
<html>
	<head>
	<title>Insert data into database</title>
	</head>
	<body>
	<?php

	// Connect to database server
	mysql_connect("127.0.0.1:3306", "root", "Goodgirl21!") or die (mysql_error ());

	// Select database
	mysql_select_db("practicecs242") or die(mysql_error());
    
	// The SQL statement is built
    $id = 11;
    $comment = "please work";
	$strSQL = "INSERT INTO users(";

	$strSQL = $strSQL . "idusers, ";
	$strSQL = $strSQL . "userscom) ";

	$strSQL = $strSQL . "VALUES(";

	$strSQL = $strSQL . "'$id', ";
    $strSQL = $strSQL . "'$comment' )";*/

	// The SQL statement is executed 
	mysql_query($strSQL) or die (mysql_error());

	// Close the database connection
	mysql_close();
	?>

	<h1>The database is updated!</h1>
	</body>
	</html>