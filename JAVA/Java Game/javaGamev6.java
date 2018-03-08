import java.io.*; //needed for file input and output
import javax.swing.JOptionPane;
import java.util.Scanner;
import java.util.Arrays;
public class javaGamev6 {

	public static void main(String[] args) throws IOException{
	//declare and initialize variables and arrays
	String userName = "none", menuChoice = "none", answer = "none";
	int selected = 0, userscore = 0, score = 0, questionNumber = 1, pointValueInt = 0;
	final int questionSize = 10, scoreSize = 3;
		
	//initialize arrays
	String[] questionArray = new String[questionSize]; String[] answerA = new String[questionSize]; String[]  answerB = new String[questionSize]; 
	String[] answerC = new String[questionSize]; String[] answerD= new String[questionSize]; String[] correctAnswer= new String[questionSize]; String[] pointValue = new String[questionSize];
	String[] highNames = new String[scoreSize]; String[] highscore = new String[scoreSize]; int[] highscoreInt = new int[scoreSize];
		
			

	//display an intro to the game
	JOptionPane.showMessageDialog(null, "Who Wants to Be A Programmer?!");

	//use a dialogbox to the prompt the user for name
	userName = JOptionPane.showInputDialog("Please enter your name: ");
				
	//while loop for input validation
	do 
	{
			//Display the main menu and prompt for menu choice
			selected = DisplayMainMenu();
				
			//use menuChoice to determine program flow.
			if(selected == 1)
			{
				//display rules
				DisplayRules();
			}
			else if (selected == 2)
			{
				//reset score
				score = 0;
				//open questions.txt
				File infile = new File("questions.txt");

				//create a Scanner object to read from the file
				Scanner fileIn = new Scanner(infile); //include the File name instead of System.in
			
				
				//invoke ProcessQuestion method
				for (int i = 0; i < questionArray.length; i++)
				{
					//Use questions.txt to set variables
					questionArray[i] = fileIn.nextLine();
					answerA[i] = fileIn.nextLine();
					answerB[i] = fileIn.nextLine();
					answerC[i] = fileIn.nextLine();
					answerD[i] = fileIn.nextLine();
					correctAnswer[i] = fileIn.nextLine();
					pointValue[i] = fileIn.nextLine(); //Int freaks out
					score = ProcessQuestion(questionArray[i], answerA[i], answerB[i], answerC[i], answerD[i], correctAnswer[i], userName, pointValue[i], pointValueInt, questionNumber, score);	
				}	

				fileIn.close();
				//display congratulations message
				DisplayScore(score);
				questionNumber = 1;
							
				//invoke ReadInHighScore and CompareScore methods
				ReadInHighScore(highNames, highscore, highscoreInt);
				CompareScore(score, userName, highNames, highscoreInt);
				UpdateHighScores(highNames, highscoreInt);
							
				//thank you message
				JOptionPane.showMessageDialog(null, "Thanks for playing.");
			}	
			else if (selected == 3)
			{
				//good bye message
				JOptionPane.showMessageDialog(null, "Good bye.");
						
			}
			else
			{
				//display invalid
				JOptionPane.showMessageDialog(null, "That is not an option");
			} 	
	}while (selected != 3); 
				
	}
	
	//method definitions
	
			//return type: String
			//parameters: None
			//purpose: should prompt for and return the main menu choice.	
			public static int DisplayMainMenu() throws IOException
			{
				//declare/initialize local variables
				String menuChoice;
				int selected = 0;
				//Display the main menu and prompt for menu choice
				menuChoice = JOptionPane.showInputDialog("Main Menu:\n1) See Rules\n2) Play Game\n3) Exit\nPlease enter your choice: ");
						
				//convert menuChoice from string to int
				selected = Integer.parseInt(menuChoice);
				return selected;
			}
			

			//return type: void
			//parameters: None
			//purpose: should display the rules to the user.
			public static void DisplayRules()
			{
				//display rules
				JOptionPane.showMessageDialog(null, "The Rules:\n- multiple choice questions, with 4 possible answers for each question\n-"
					+ " The topic for each question will be Java related\n- Points will be assigned for each correct anwser\n- At the end, your score will be displayed");
			}

			//return type: int
			//parameters: 7 (5 string, 1 char, 1 int)
			//purpose: should display a question and its corresponding 4 answers, prompt for the correct answer and display correct/incorrect to the user.  
			//The function should also return the points that the user received.  If the user answers incorrectly, return a value of zero. 
			public static int ProcessQuestion(String questionArray, String answerA, String answerB, String answerC, String answerD, String correctAnswer, String userName, String pointValue, int pointValueInt, int questionNumber, int score) throws IOException
			{
				//local answer variable
				String answer;

				do{
					//display questions, answers, and prompt the user for input
						answer = JOptionPane.showInputDialog(userName + "'s Score: " + score + "\n\n" + questionArray + "\n\n" + answerA + "\n" + answerB + "\n" + answerC + "\n" + answerD + "\n\n");
				//flag for input validation
						if (answer.equalsIgnoreCase(correctAnswer))
						{
							//copy the pointValue to pointValueInt
							pointValueInt = Integer.parseInt(pointValue);
							//add pointValueInt to accumulator
							score += pointValueInt;
							JOptionPane.showMessageDialog(null, "Congratulations, your answer is correct!");
								
						}
						else if (!answer.equalsIgnoreCase("A")&&!answer.equalsIgnoreCase("B")&&!answer.equalsIgnoreCase("C")&&!answer.equalsIgnoreCase("D"))
						{
							
						JOptionPane.showMessageDialog(null, "That is not a valid option!\nPlease enter option A,B,C or D!");
						
						}
						else
						{
						JOptionPane.showMessageDialog(null, "I'm sorry, that was the wrong answer: ");
						}				

				}while(!answer.equalsIgnoreCase("A")&&!answer.equalsIgnoreCase("B")&&!answer.equalsIgnoreCase("C")&&!answer.equalsIgnoreCase("D"));
						
				return score;
				
			}					
									
									
									
			//return type: int
			//parameters: None
			//purpose: 
			public static void ReadInHighScore( String highNames[], String highscore[], int highscoreInt[]) throws IOException
			{
				//open highscore.txt
				File infile2 = new File("highscore.txt");
										
				Scanner fileIn2 = new Scanner(infile2); //include the File name instead of System.in
				for (int i = 0; i < highscoreInt.length; i++)
				{
					//read score from file
					highNames[i] = fileIn2.nextLine();
					highscore[i] = fileIn2.nextLine();
					
					//copy the pointValue to pointValueInt
					highscoreInt[i] = Integer.parseInt(highscore[i]);
					
				}

	
				//close file
				fileIn2.close();
			}


			//return type: void
			//parameters: 2 (2 int)
			//purpose:							
			public static void CompareScore(int score, String userName, String highNames[], int highscoreInt[]) throws IOException
			{	
				//compare score and write to file if new score is higher
				if (score > highscoreInt[0])
				{
					Scanner consoleIn = new Scanner(System.in);
					JOptionPane.showMessageDialog(null,"CONGRATULATIONS!\nYou have a new highscore!");
					highscoreInt[2] = highscoreInt[1];
					highNames[2] = highNames[1];
					highscoreInt[1] = highscoreInt[0];
					highNames[1] = highNames[0];
					highscoreInt[0] = score;
					highNames[0] = userName;

				}
				else if (score > highscoreInt[1])
				{
					Scanner consoleIn = new Scanner(System.in);
					JOptionPane.showMessageDialog(null,"CONGRATULATIONS!\nYou have a new highscore!");
					highscoreInt[1] = highscoreInt[2];
					highNames[1] = highNames[2];
					highscoreInt[1] = score;
					highNames[1] = userName;
				
				}
				else if (score > highscoreInt[2])
				{
					Scanner consoleIn = new Scanner(System.in);
					JOptionPane.showMessageDialog(null,"CONGRATULATIONS!\nYou have a new highscore!");
					highscoreInt[2] = score;
					highNames[2] = userName;
					
				}
			} 

			//return type: void
			//parameters: 1 int
			//purpose:	
			public static void DisplayScore(int score)
			{
				//display congratulations message
				JOptionPane.showMessageDialog(null, "Congratulations, you've completed the quiz!\nYour score: " + score);
			}

			
			//return type: void
			//parameters:
			//purpose:
			public static void UpdateHighScores(String highNames[], int highscoreInt[]) throws IOException
			{
				
				Scanner consoleIn = new Scanner(System.in);
				PrintWriter outfile = new PrintWriter("highscore.txt");
				
				//open file
				for (int i = 0; i < highscoreInt.length; i++)
				{
					outfile.println(highNames[i]);
					outfile.println(highscoreInt[i]);	
					
				}
				
				outfile.close();
			}
}