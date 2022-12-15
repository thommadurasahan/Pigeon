<?php


//Starts extracting data from the Booking form to variables of this PHP file.

//$Variable_Name = $_POST['Feald_name_of_the_booking_form'];

$NIC = $_POST['P'];
$Name = $_POST['N'];
$Email = $_POST['E'];
$Phone = $_POST['PN'];
$Address = $_POST['A'];
$Package = $_POST['Pack'];
$Adults = $_POST['Adults'];
$Children = $_POST['Children'];
$Veg = $_POST['Veg'];
$SDate = $_POST['Date'];
$Other = $_POST['Other'];

//Finished extracting data from the Booking form to variables of this PHP file.


//Starts establishing database connection.


//$con = mysqli_connect('MySQL_Hostname','Username','Password','Database_Name');

$con = mysqli_connect('sql308.epizy.com','epiz_33077060','htTrDJHWScdIsp','epiz_33077060_pigeondb');

//Finished establishing database connection.


//Starts checking database connection.

//! = Not
//$con = Connect

if (!$con)
{
	//Error with database connection.

	echo "Error with database connection";
}
else
{
	//Database connection sucusful.

	//Starts making the query.

	//$query = "INSERT INTO Table_Name VALUES(DEFAULT,'$Varable_1_im_this_PHP_File','$Varable_2_im_this_PHP_File',...)";

	$query = "INSERT INTO Booking VALUES(DEFAULT,'$NIC','$Name','$Email','$Phone','$Address','$Package','$Adults','$Children','$veg','$Date','$Other')";

	//Finished making the query.

	//Starts runing the query.

	if (mysqli_query($con,$query))
	{

		//If data stores sucusfully in the database, these lines will execute.

		echo '<script language = "Javascript">';

		//echo 'alert("The mesage to display if data stored in the database sucusfully.")';

		echo 'alert("Booking Sucusful\nWe will contact you soon.")';
		echo'</script>';
	}
	else
	{

		//If data didn't store in the database, these lines will execuite.

		//echo 'The mesage to display if data storing in the database uncusful.;
		
		echo 'Error !';
	}

	//Finished runing the query.
}

//Finished checking database connection.

?>