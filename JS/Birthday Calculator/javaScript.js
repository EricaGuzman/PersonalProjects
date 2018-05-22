
//global variables
var month = ' ';
var day = ' ';
var name = ' ';

//Next birthdate function
function nextBirthDate(){
	var theMonths = new Array('January','February','March',
        'April','May','June','July','August','September',
        'October','November','December');
      var weekDays = new Array('Sunday','Monday','Tuesday',
        'Wednesday','Thursday','Friday','Saturday');
	name = prompt("Enter your name:");
	var nam = name.toUpperCase();
	alert('Welcome '+nam);
	month = prompt("Enter two digit birth month:");
	var mons = month - 1;
	var m = parseInt(mons);
	var Months = theMonths[m];
	alert('You entered: '+ Months);
	day = prompt("Enter two digit day of birth: ");
	alert('You entered: '+ day);
	
	var birthDay = new Date();
	var mon = month -1;
	
	birthDay.setDate(day);
	
	birthDay.setMonth(mon);
	 var currentDate = new Date();
	birthDay.setYear(birthDay.getFullYear() + 1);
	console.log(birthDay);
	console.log(currentDate);
	 var daysLeft = birthDay - currentDate;
	 console.log(daysLeft);
	var days =1000 * 60 * 60 * 24;
	
	alert('Next Birthday: ' + birthDay);
	alert("There are "+(Math.floor(daysLeft/days))+" Days to your next birthday!")
	alert('Thank you for using my program '+nam+' Have a great day!');
	
	
	
}