#Erica Guzman
#Lab 2
#This program calculates
#the number of miles traveled based on user input of kilometers traveled

#Define main
def main():
#Declare and initilaize float variables
	#String userName
	#Float Kilometers
	#Float miles
	#Float conversion =  0.621371
     UserName = " "
     Kilometers = miles = 0.0
     conversion = 0.621371
#display "Welcome to the miles conversion program Enter the Kilometers travelled and I convert it to miles
     print("Welcome to the miles conversion program!")
     print("Enter the Kilometers travelled and I will convert it to miles! ")
#set userName to input "What is your name?
     userName =(input("\nEnter your first name: "))
#set Kilometers to hold user input "How many kilometers did you travel?
     Kilometers = float(input("How many Kilometers did you travel? "))
#calculate (miles = Kilometers divided by conversion)
     miles = Kilometers * conversion
#display "Great job ",userName, "\n", kilometers , " kilometers equals " , miles ," miles!", 
			#"\nThank you for using my program, keep up the good work!"
     print("\nGreat job ",userName, "!\n", Kilometers , "kilometers equals %0.02f" % miles ,"miles!", end="")
     print("\nThank you for using my program. Keep up the good work!!")
     
main() 
