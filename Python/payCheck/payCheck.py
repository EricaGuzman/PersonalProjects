#Erica Guzman
#This program calculates user's weekly paycheck
import math

#Define main
def main():
#Declare and initilaize float variables
    weeklySalesAmount = commission = grossPay = netPay = socialSecurity = federalTax = 0.0
    #constant for base pay
    basePay = 400.00    
     
	
#display Welcome message:
    print("Welcome to your weekly paycheck generator!");
    weeklySalesAmount = float(input("Enter the dollar amount of sales made for the week: "));
    #calculations:
    commission = weeklySalesAmount * .06
    grossPay = weeklySalesAmount + basePay + commission
    socialSecurity = grossPay * .06  
    federalTax = grossPay * .12
    netPay = grossPay -(socialSecurity + federalTax)
    #print paycheck
    print ("*" * 40)
    print("Base Pay:\t ${:,.2f}" .format (basePay));
    print("Sales:\t\t ${:,.2f}" .format (weeklySalesAmount));
    print("Commission:\t ${:,.2f}" .format (commission));
    print("Gross Pay:\t ${:,.2f}" .format (grossPay));
    print();
    print("Deductions: ");
    print ("*" * 40) 
    print("Social security: ${:,.2f}" .format (socialSecurity));
    print("Federal Tax:\t ${:,.2f}" .format (federalTax));
    print ("*" * 40)
    print("Net Pay:\t ${:,.2f}" .format (netPay));
    #display Goodbye
    print();
    print("Thank you for using the paycheck generator! \n Have a nice day!!");
    
main() 
