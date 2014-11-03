<?php
/*
* config database
* MySQL
*/

// database's name
define("DATABASE", "jobboard");

// database's password
define("PASSWORD", "123456");

// database's server
define("SERVER", "localhost");
// database's username
define("USERNAME", "root");

//Create connection
try {
	$conn = new PDO("mysql:dbname=" . DATABASE .";host=" . SERVER, USERNAME, PASSWORD);
	// set the PDO error mode to exception
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//SQL to create table
	$sql = "CREATE TABLE JobPosts(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		PositionName VARCHAR(40) NOT NULL,
		Employer VARCHAR(50) NOT NULL,
		Description TEXT,
		PositionType VARCHAR(30) NOT NULL,
		h1b BOOLEAN NOT NULL
		)";
	// use exec() becaues no results are returned
	$conn ->exec($sql);
	echo "Table JobPosts created successfully";
	}
catch(PDOException $e)
	{
		echo $sql . "<br>"  . $e->getMessage();
	}
$conn = null;

?>