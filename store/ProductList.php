<?php
	$servername = "localhost";
	$username = "Visitor";
	$password = "78VGasbQp1mYy3kH";
	$DBname = "Team_MODS";
	$count = 0;
	 
	
	//Connection Creation
	$session = new mysqli($servername, $username, $password, $DBname);

	//Checking connection success
	if($session->connect_error)
	{
		die("Connection Failed: " . $session->connect_error);
	}
	
	$sql = "SELECT Name, Type, Price, InStock, ImgName FROM Product_T WHERE type='" . $productType . "'";
	$result = $session->query($sql);
	
	//$query_return = "<tr><th>" . $productType . "</tr></th>";
	$query_return = "<tr>"; //Starting initial row
	
	if($result->num_rows > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			if($count % 6 == 0) //If the current row has 3 products
			{
				$query_return .= "</tr>"; //End the current row
				$query_return .= "<tr>"; //Start a new row
				
				$query_return .= "<td>"; //Starting Cell
				$query_return .= "<img src='../images/productImages" . $row['ImgName'] . ".jpg' alt='"  . $row['Name'] . "' style='width:200px;height:200px;'>"; //Inserting Product Image
				$query_return .= "<div id='productName'>" . $row['Name'] . "</div>"; //Inserting Name of Product
				$query_return .= "<div id='productPrice'>$" . $row['Price'] . "</div>"; //Insert Product price
				
				if($row['InStock'] == 1)//If the Item is in stock
				{
					$query_return .= "<div id='inStock'>Currently In-Stock</div>";
				}
				else //Otherwise it is out of stock
				{
					$query_return .= "<div id='outStock'>Out Of Stock</div>";
				}
				
				$query_return .= "</td>"; //Ending Cell
				
				$count++;
			}
			else
			{
				$query_return .= "<td>"; //Starting Cell
				$query_return .= "<img src='../images/productImages" . $row['ImgName'] . ".jpg' alt='"  . $row['Name'] . "' style='width:200px;height:200px;'>"; //Inserting Product Image
				$query_return .= "<div id='productName'>" . $row['Name'] . "</div>"; //Inserting Name of Product
				$query_return .= "<div id='productPrice'>$" . $row['Price'] . "</div>";// Insert Product price
				
				if($row['InStock'] == 1)//If the Item is in stock
				{
					$query_return .= "<div id='inStock'>Currently In-Stock</div>";
				}
				else //Otherwise it is out of stock
				{
					$query_return .= "<div id='outStock'>Out Of Stock</div>";
				}
				
				$query_return .= "</td>"; //Ending Cell
				
				$count++;
			}
		}
		
			$query_return .= "</tr>";
	}
	else
	{
		$query_return = "0 results found";
	}
	
	echo $query_return;
	//$productType = null;
	//$query_return = null;
	
	$session->close();
?>
