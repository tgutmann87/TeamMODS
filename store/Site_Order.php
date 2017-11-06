<!DOCTYPE html>
<html lang="en">

	<head>
		<title>TeamMODS Gaming</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../style/Order.css" />
		<script type="text/javascript" src="../javascript/Order.js"></script>
	</head>
	
	<body>
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
	
		<table id="OrderPane">
			<tr>
				<td>
					<div id="orderHeader">Order/Inquiry</div>
					<form id="Order" action="http://www.teammods.net/store/OrderSubmit.php" method="POST" autocomplete="on">
						First Name:
						<input type="text" name="firstname" title="First Name" placeholder="First Name(required)" size="30" required><br><br>
						
						Last Name:
						<input type="text" name="lastname" title="Last Name" placeholder="Last Name(required)" size="30" required><br><br>
						
						Country:
						<input type="text" name="country" title="Country" placeholder="United States" size="20" required><br><br>
						
						State:(If in the US )
						<select id="Statebox" name="states">
							<option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">PA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">UT</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
							<option value="PR">PR</option>
							<option value="VI">VI</option>
						</select><br><br><br>
						
						Phone:
						<input type="text" name="phone" title="Phone" placeholder="Phone" size="20"><br><br>
						
						Email:
						<input type="text" name="email" title="Email" placeholder="Email (required)" size="40" required><br><br>
						
						Facebook: www.facebook.com/
						<input type="text" name="facebook" title="Facebook" placeholder="yourpagename" size="20"><br><br><br>
						
						Skin:
						<select id="skins" name="skins" onchange="skinPriceChange()">
							<?php include "skinDropbox.php";?>
						</select><br>
						<div id="skinImage" name="skinImage"></div><br>
						
						Buttons:
						<select id="buttons" name="buttons" onchange="buttonPriceChange()">
							<?php include "buttonDropbox.php";?>
						</select><br>
						<div id="buttonImage" name="buttonImage"></div><br>
						
						Item Type:
						<select id="type" name="type">
							<option value="xbox1">Xbox One Controller</option>
							<option value="xbox360">Xbox 360 Controller</option>
							<option value="xbox">Xbox Controller</option>
							<option value="ps4">PS4 Controller</option>
							<option value="ps3">PS3 Controller</option>
							<option value="ps2">PS2 Controller</option>
							<option value="ps1">PS One Controller</option>
							<option value="n64">N64 Controller</option>
							<option value="other">Other</option>
						</select><br><br>
						
						Additional Information:<br>
						<textarea id="info" name="info" rows="10" cols="30"></textarea><br><br>
						
						Your current estimated total is:
						<div id="cost">$0.00</div>
						<input type="hidden" id="price" name="price" value="$0.00"><br>
						*Prices may be converted using the daily conversion ratings for your country<br>
						
						
						<div id="FormButts">
							<input id="FormButt" type="submit" value="Submit">
							<input id="FormButt" type="reset">
						</div>
						
					</form>
				</td>
				
				<td valign="top" id="directions">
					<div id="dirHeader">Interested in our gear?</div>
					<div id="dirHeader2">This is what you need to know!</div>
					<ul>
						<li>All of the gear we dip includes free clear coating to help prolong the life of our products</li>
						<li>When sending your gear to be dipped please separate the shell from the controller. This ensures cheaper shipping for both parties. If anything happens to your shipment it is cheaper to replace</li>
						<li>We highly suggest getting insurance and/or a tracking number for your shipment. By providing a tracking number we can more accurately give you a status on your order.</li>
						<li>Once your order has been submitted we will contact you as soon as possible with instructions on where to send your gear.</li>
						<li>Due to high demand we may have to defer an order till more current orders are filled.</li>
						<li>Please hold off on all forms of online payments until your order has been confirmed and further instruction has been given.</li>
						<li>We currently accept these forms of payment: Cash, Money Order, Paypal. </li>
						<li>When we contact you regarding your order, let us know your preferred form of payment and we will send you the necessary information</li>
					</ul>
				</td>
			</tr>
		
		</table>
		
		<footer>
			<p>This website is a production of Timothy Gutmann</p>
			<p><b>TeamMODS LLC &copy;2016.</b></p>
		</footer>
	</body>
	
</html>