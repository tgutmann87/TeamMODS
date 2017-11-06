<?php
	header('Location: Site_Order.html');
	header("Access-Control-Allow-Origin: *");
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
	else 
	{
		echo "Connection Successful<br>";
	}
	
	$sql = "SELECT CID, Email FROM Customer_T WHERE Email = '" . $_POST['email'] . "'";
	$result = $session->query($sql);
	
	if($result->num_rows == 0)
	{
		$sql = "INSERT INTO Customer_T (First, Last, Country, State, Phone, Email, FB)";
		$sql .= "VALUES ('" . $_POST['firstname'] . "', '"; 
		$sql .= $_POST['lastname'] . "', '";
		$sql .= $_POST['country'] . "', '";
		$sql .= $_POST['states'] . "', '";
		$sql .= $_POST['phone'] . "', '";
		$sql .= $_POST['email'] . "', '";
		$sql .= $_POST['facebook'] . "')";
	
		$session->query($sql);
		$id = $session->insert_id;
	}
	else
	{
		while($row  = $result->fetch_assoc())
		{
			$id = $row['CID'];
		}
	}
	
	if(isset($_SERVER['REMOTE_ADDR']))
	{
		$sql = "INSERT INTO IPAddr_T (Address, Customer) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "', '" . $id . "')";
		$session->query($sql);
	}
	
	$sql = "INSERT INTO Order_T (Skin, Buttons, ItemType, AdditionalInfo, Price, CustomerID)";
	$sql .= "VALUES ('" . $_POST['skins'] . "', '";
	$sql .= $_POST['buttons'] . "', '";
	$sql .= $_POST['type'] . "', '";
	$sql .= $_POST['info'] . "', '";
	$sql .= $_POST['price'] . "', '";
	$sql .= $id . "')";
	
	$session->query($sql);

	
	$session->close();
	
?>