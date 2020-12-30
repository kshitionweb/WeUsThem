<?php

	$link = mysqli_connect("localhost", "root", "");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Print host information
	//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

	// Create database
	//$sql = "CREATE DATABASE weusthem";
	//if(mysqli_query($link, $sql)){
	   // echo "<br/>Database created successfully.";
	//} else{
	 //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	//}

	$link = mysqli_connect("localhost", "root", "", "weusthem");

	// Attempt create table query execution
	//$sql = "CREATE TABLE contacts(
	   // id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	    //first_name VARCHAR(30) NOT NULL,
	    //last_name VARCHAR(30) NOT NULL,
	    //email VARCHAR(70) NOT NULL UNIQUE,
	    //phone VARCHAR(15) NOT NULL UNIQUE
	//)";
	//if(mysqli_query($link, $sql)){
	  //  echo "</br>Table created successfully.";
	//} else{
	//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	//}

	// Inserting contacts into table
	//$sql = "INSERT INTO contacts (first_name, last_name, email, phone) VALUES ('Peter', 'Parker', 'peterparker@mail.com', '+91798372646')";
	//if(mysqli_query($link, $sql)){
	 //   echo "</br>Records inserted successfully.";
	//} else{
	//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	//}

?>