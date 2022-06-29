<?php
	//check if the database file exists and create a new if not
	if(!is_file('db/data.sqlite3')){
		file_put_contents('db/data.sqlite3', null);
	}
	// connecting the database
	$conn = new PDO('sqlite:db/data.sqlite3');
	//Setting connection attributes
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Query for creating reating the member table in the database if not exist yet.
	$query = "CREATE TABLE IF NOT EXISTS student(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password TEXT, firstname TEXT, lastname TEXT)";
	$query1 = "CREATE TABLE IF NOT EXISTS staff(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, firstname TEXT, lastname TEXT, username TEXT, role TEXT, password TEXT)";
	//Executing the query
	$conn->exec($query);
	$conn->exec($query1);
?>