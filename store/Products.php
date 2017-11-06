<!DOCTYPE html>
<html lang="en">

	<head>
		<title>TeamMODS Gaming</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.teammods.net/style/Product.css" />
		<script type="text/javascript" src=""></script>
	</head>
	
	<header>
		<div id="header_title">
				<h3>Welcome to</h3>
				<h1>TeamMODS Gaming</h1>
		</div>
			
		<nav>
			<ul id="nav_bar">
				<li><a href="../index.html">Home</a></li>
				<li><a href="Site_Order.php">Order/Inquiry</a></li>
				<li><a href="Products.php">Product Line</a></li>
			</ul>
		</nav>	
	</header>
	
	<body>

		<div id="introHeader">Hey!...You!...Looking for some skin?!</div>
		<div id="introText">Take a look down below at our current line up of films to have your gear dipped in. If you see a product that is currently not in stock don't worry.
		It's just temporary and we will have it back in stock soon! When you see something that catches your eye go ahead and submit an order/inquiry and we'll get right back to you.
		While we dont have them listed now, be sure to keep an eye out in the future for our line of aluminum and other custom made buttons/joysticks</div>
		
		<div id='productPane'>
			<h4>Skins</h4>
			<table id='products'>
					<!--PHP for displaying the different Skins -->
					<?php $productType = "Skin"; 
					include "ProductList.php";?>
			</table>
			
			<h4>Buttons</h4>
			<table id='products'>
					<!--PHP for displaying different Buttons -->
					<?php $productType = "Buttons"; 
					include "ProductList.php";?>
			</table>
		</div>
		
		<footer>
			<p>This website is a production of Timothy Gutmann</p>
			<p><b>TeamMODS LLC &copy;2016.</b></p>
		</footer>
	</body>
</html>