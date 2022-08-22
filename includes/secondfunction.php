<?php
//connects to database using the username and password
$mysqli = new mysqli("localhost", "root", "", "creditcard");

//if unable to connect it displays couldn't connect
if($mysqli === false){
    die("Couldn't connect. " . $mysqli->connect_error);
}

//selects the latest column of ccnum based on the row id 
//only one ccnum can be displayed 
$sql = "SELECT * FROM card ORDER BY `#` DESC LIMIT 1";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
		//fetches ccnum and stores into $x
		//stored so can be edited later	
		 $x = $row['ccnum'] ; 
        }
        $result->free();
    } else{
		//if no records are found it outputs
		//no records found
        echo "No records found.";
    }
} else{
	//otherwise error is displayed
    echo "ERROR: " . $mysqli->error;
}

//closes connection
$mysqli->close();
?>