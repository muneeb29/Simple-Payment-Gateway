<?php
//By Muneeb khalid 

// connects using password and username
$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		//if connection fails it displays not connected
		echo 'Not connected';
	}
	
	//connects to database creditcard
	if(!mysqli_select_db($con,'creditcard'))
	{
		//if database isn't connected to
		//it displays database not selected
		echo 'Database Not Selected';
	}
	//if submit button is pressed
	if(isset($_POST['submit']))
	{	
	//gets value from each input	
	$ccnum = $_POST['ccnum'];
	$seccode = $_POST['seccode'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	//store day as 01 by default as there isn't an input
	$day = 01; 
	
	//merges the month/day/year 
	$date_value="$year/$month/$day";
	//stores as date by changing the format
	$date = date('Y-m-d', strtotime($date_value));
	
	

//function to encrypt card number with *		
function encrypt($number){
	return str_repeat("*",12) . substr($number, -4);
}

//encrypts card number using function
//stores in $val1
$val1 =  encrypt($ccnum);
//add space after 4 digits and stores in $val2
$val2 = chunk_split($val1, 4, ' ');

//row increment below
$result = mysqli_query($con,"SELECT * FROM card");

while($row = mysqli_fetch_array($result))
{
	//gets the last row with # and adds one
	//stores it in $id
	$id = $row['#'];
	//adds one to $id and stores in $col1
	$col = $id + 1;
}

//checks for duplicate data 
//compares input with ccnum in database
$res= mysqli_query($con,"select * from card where ccnum='$val2'");

//if there's no duplicate data then it inserts it into database 
if(mysqli_num_rows($res)==0)
{

	//inserts data into database with values 
	$sql = "INSERT INTO card (`#`,ccnum,expdate,seccode) 
	VALUES ('$col','$val2','$date','$seccode')";

		if(!mysqli_query($con,$sql)) 
	{
		//if data's not inserted it displays not inserted
			echo 'Not Inserted';
	}

	else
	{
		//displays secondpage if the data is inserted into database
			header("refresh:2; url = secondpage.php");
	}
}
//if duplicate data exists it displays record already exists
else{
echo 'Record already exists';
}
	

	}

		
?>