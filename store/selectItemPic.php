<?php
	$servername = "localhost";
	$username = "Visitor";
	$password = "78VGasbQp1mYy3kH";
	$DBname = "Team_MODS";
	
	$type = $_GET['type'];
	$itemName = $_GET['itemName'];
	$pathway = " ";
	
	//Connection Creation
	$session = new mysqli($servername, $username, $password, $DBname);

	//Checking connection success
	if($session->connect_error)
	{
		die("Connection Failed: " . $session->connect_error);
	}
	
	$sql = 'SELECT ImgName FROM Product_T WHERE Type="' . $type . '" AND Name="' . $itemName . '"';
	$result = $session->query($sql);
	
	if($result->num_rows == 1)
	{
		while($row  = $result->fetch_assoc())
		{
			$pathway = '<img id="sknImg" src="../images/productImages' . $row['ImgName'] . '.jpg" alt="Skin Image">';
		}
	}
	
	echo $pathway;
	$session->close();
?>