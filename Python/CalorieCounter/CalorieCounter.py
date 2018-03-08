
#Algorithm
#Erica Guzman


def main():

#Declare and initialize variables:
    CookiesPerBag = 40;
    ServingPerBag = 10;
    CaloriesPerServing = 300;
    CookiesEaten = TotalCaloriesEaten = CaloriesPerCookie = CookiesPerServing = 0.0;
    Username = " ";

#Calculate calories per cookie
    CookiesPerServing = ServingPerBag / CookiesPerBag
    CaloriesPerCookie = ServingPerBag / CookiesPerServing
    print("There are:",CaloriesPerCookie," calories in one cookie!")

#Username = display: “Welcome to the calories counter! What is your name?”
    UserName = input("Welcome to my Calories Counter!\n What is your name? ")

#CookiesEaten = display: “Welcome”, UserName, ”How many cookies did you eat?”
    print("\nWelcome ",UserName)
    CookiesEaten = float(input("How many cookies did you eat? "))

#Calculate calories consumed
    TotalCaloriesEaten = CaloriesPerCookie * CookiesEaten

#Displaly: “You have consumed”, Totalcalories, “ calories!”
    print("\nThank you ", UserName)
	print("\nThank you {0}. You have consumed {1}calories".format(UserName, TotalCaloriesEaten))

    
main()
