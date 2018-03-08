
public class Scissors extends Tool {
	public Scissors(int strength, char type)
	{
		super(strength, type);
	}
	
	public String fight(Tool opponent) 
	{
		
		if (opponent.type == 'p'){
		
			if(this.strength*2 > opponent.strength) 
			{
				return "Scissor Wins!!";
			}
			else 
			{
				return "Paper Wins!!";
			}
		}
		
		else if (opponent.type == 'r')
		{
			
			if(this.strength/2 > opponent.strength) 
			{
				return "Scissor Wins!!";
			}
			else if(this.strength/2 == opponent.strength)
			{
				return "It's a tie!";
			}
			else 
			{
				return "Rock Wins!!";
			}
		}
	
		
		return "Error, choose valid opponent!";
	}
	
}


