#Erica guzman
#This program will prompt the user fir an employee sales then calculate the weekly gross pay,
#deductions and net pay.

#Define main
def main():
    #Declare and initialize variables and constants
    #variables:
    basePay = deductions=commLessThan=commGreaterThan = salesAmount=commission=grossPay=netPay=0.0
    #constants
    SS = 0.06
    FEDTAX = 0.12

    #Display welcome
    print("Welcome to the weekly PAY calculator!")
    print("-"*40)

    #Prompt for sales amount (Save in variable salesAmount)
    while True: #to continue try/except after more than 2 invalid inputs   
        try:
            salesAmount=float(input("Please enter employee sale amount: "))
            break #if input is valid exit loop    
        except ValueError:
            print("That was not a valid entry!\nInput must be a NUMERICAL value.\n")
            print("-"*40)
            pass 
                
       #Open and read in files from “payinfo.txt”
    infile = open("payinfo.txt", "r")
    line1 = infile.readline()
        
        #comma sperator
    basePay,commLessThan,commGreaterThan = line1.split(",")
        
        #convert ALL numeric data
    basePay = float(basePay)
    commLessThan= float(commLessThan)
    commGreaterThan = float(commGreaterThan)

        #close the file
    infile.close()

        #Create decision structure to determine commission
    if salesAmount <=1500:
        commission = salesAmount*commLessThan
        grossPay = basePay +commission      
        deductions =(grossPay*SS)+(grossPay*FEDTAX)
        grossPay -= deductions
    else:
        commission = salesAmount*commGreaterThan
        grossPay = basePay + commission
        deductions =(grossPay*SS)+(grossPay*FEDTAX)
        netPay = grossPay - deductions
            
        #Open new file to write in new data called “EmployeePaycheck.txt”
        outfile = open("EmployeePaycheck.txt","w")
        
        #display to screen
    print("\n","*"*7,"Employee Paycheck","*"*7)
    print("-"*40)
    print("Base pay:\t\t ${:,.2f}" .format (basePay))
    print("Sales:\t\t\t ${:,.2f}" .format (salesAmount))
    print("Commission:\t\t ${:,.2f}" .format (commission))
    print("Gross Pay:\t\t ${:,.2f}" .format (grossPay))
    print("Deductions:")
    print("\tSocial Security: ${:,.2f}" .format (grossPay*SS))
    print("\tFederal Tax:\t ${:,.2f}" .format (grossPay*FEDTAX))
    print("Net Pay:\t\t ${:,.2f}" .format (netPay))

        #write to file EmployeePaycheck.txt
    print("*"*7,"Employee Paycheck","*"*7,file = outfile)
    print("-"*40,file = outfile)
    print("Base pay:\t\t ${:,.2f}" .format (basePay),file = outfile)
    print("Sales:\t\t\t ${:,.2f}" .format (salesAmount),file = outfile)
    print("Commission:\t\t ${:,.2f}" .format (commission),file = outfile)
    print("Gross Pay:\t\t ${:,.2f}" .format (grossPay),file = outfile)
    print("Deductions:",file = outfile)
    print("\tSocial Security: ${:,.2f}" .format (grossPay*SS),file = outfile)
    print("\tFederal Tax:\t ${:,.2f}" .format (grossPay*FEDTAX),file = outfile)
    print("Net Pay:\t\t ${:,.2f}" .format (netPay),file = outfile)
        #close file 
    outfile.close()
    print("\nThank you for using the program!\nYour information was sent to \"EmployeePaycheck.txt\"!")
    


main()
    

