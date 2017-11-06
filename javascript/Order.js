var buttonPrice = 0.00;
var skinPrice = 0.00;

function buttonPriceChange()
{
	var temp = document.getElementById("buttons");
	var buttonName = temp.options[temp.selectedIndex].value;
	
	getPicture("Buttons", buttonName);
	
	var buttonText = temp.options[temp.selectedIndex].text;
	
	//Finds first double in String by ignoring everything that is not a character
	buttonPrice = parseFloat(buttonText.match(/-?(?:\d+(?:\.\d*)?|\.\d+)/)[0]);
	
	newQuote();
}

function skinPriceChange()
{
	var temp = document.getElementById("skins");
	var skinName = temp.options[temp.selectedIndex].value;
	
	getPicture("Skin", skinName);
	
	var skinText = temp.options[temp.selectedIndex].text;
	
	//Finds first double in String by ignoring everything that is not a character
	skinPrice = parseFloat(skinText.match(/-?(?:\d+(?:\.\d*)?|\.\d+)/)[0]);
	
	newQuote();
}

function newQuote()
{
	var quote = buttonPrice + skinPrice;
	
	document.getElementById("cost").innerHTML = "*$" + quote;
	document.getElementById("price").value = quote;
}

function getPicture(type, item)
{

	//Step 1: Creating the AJAX component
	//Works for all browsers ActiveXObject no longer needed
	var xmlhttp = new XMLHttpRequest();
 
	
	//Step 2: Open the connection to the PHP page and prepare information to be sent
	xmlhttp.open("GET","selectItemPic.php?type="+type+"&itemName="+item,true);
	
	//Step3: Set ReadyStateChange Handler
	xmlhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{

			if(type == "Skin")
			{
				document.getElementById("skinImage").innerHTML = this.responseText;
			}
			else if(type == "Buttons")
			{
				document.getElementById("buttonImage").innerHTML = this.responseText;
			}
		}
	};
	
	//Step 4: Send the information to the PHP page to be processed
	xmlhttp.send();
}