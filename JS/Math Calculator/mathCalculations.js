//function for addition
function add(){
	x = parseFloat(prompt("Please enter a number to be added",""))
	y = parseFloat(prompt("Please enter a number to be added",""))
	var displayTotal = x + y;
	alert( x + " + " + y + " = " + displayTotal)
	return displayTotal;
}
//function for subtraction
function subtract(){
	x = parseFloat(prompt("Please enter a starting number to subtract from",""))
	y = parseFloat(prompt("Please enter a number to be subtracted",""))
	var displayTotal = x - y;
	alert( x + " - " + y + " = " + displayTotal)
	return displayTotal;
}
//function for multiplication
function multiply(){
	x = parseFloat(prompt("Please enter a number to be multiplied",""))
	y = parseFloat(prompt("Please enter a number to be multiplied",""))
	var displayTotal = x * y;
	alert( x + " * " + y + " = " + displayTotal)
	return displayTotal;
}
//function for division
function divide(){
	x = parseFloat(prompt("Please enter a number to be divided by",""))
	y = parseFloat(prompt("Please enter a number to divide",""))
	var displayTotal = x / y;
	alert( x + " / " + y + " = " + displayTotal)
	return displayTotal;
}