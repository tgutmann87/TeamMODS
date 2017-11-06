<?php
	$servername = "localhost";
	$username = "Visitor";
	$password = "78VGasbQp1mYy3kH";
	$DBname = "Team_MODS";
	
	//Connection Creation
	$session = new mysqli($servername, $username, $password, $DBname);

	//Checking connection success
	if($session->connect_error)
	{
		die("Connection Failed: " . $session->connect_error);
	}
	
	$sql = "SELECT * FROM Product_T WHERE Type = 'Skin' ";
	$result = $session->query($sql);
	
	$query_return = '<option value="none">None ($0.00)</option>';
	
	if($result->num_rows > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			$name = $row['Name'];
			
			$query_return .= '<option value= "' . $name . '">' . $name . ' ($' . $row['Price'] . '.00) </option>';
		}
	}
	
	echo $query_return;
	
	$session->close();
?>
	