
		//function for caluculations
	function doIt(){
				var twenty = 0
				var tens = 0;
				var twos = 0;
				var ones = 0;
				var rem = 0;  
				
		// Get the value of the input field 
	var userInput=document.getElementById ("userInsert").value ;

		// decision structure to validate input
			if (isNaN(userInput) == true || userInput < 20 || userInput > 100) 
			{
				document.body.innerHTML = "Invalid input! <br/> Please enter a number between 20-100.";
			} 
			else 
			{
				twenty= parseInt (userInput / 20);
				
				rem = userInput % 20;

				tens = parseInt (rem/10);

				rem = rem % 10;

				fives= parseInt (rem/5);

				rem = rem % 5; 

				two = parseInt (rem / 2);

				rem = rem % 2;

				ones = parseInt (rem / 1);
		
		//print out the values.
	
			document.body.innerHTML = "<fieldset><u>You will need:</u><br/><br/> 20's:\t" 
			+ twenty + "<br/>10's:\t" 
			+ tens + "<br/>5's:\t" 
			+ fives + "<br/>2's:"
			+ two + "<br/>1's:\t" 
			+ ones +"</fieldset>" ;
			}
	}

