
public class Paper extends Tool {
		
	public Paper(int strength, char type)
	{
		super(strength, type);
	}
	
	public String fight(Tool opponent) 
	{		
		
		if (opponent.type == 'r'){
	
			
			if(this.strength*2 > opponent.strength) 
			{
				return "Paper Wins!!";
			}
			
			else 
			{
				return "Rock Wins!!";
			}
		}
		
		else if (opponent.type == 's')
		{
	
			
			if(this.strength/2 > opponent.strength) 
			{
				return "Paper Wins!!";
			}
			else if(this.strength/2 == opponent.strength)
			{
				return "It's a tie!";
			}
			
			else 
			{
				return "Scissor Wins!!";
			}
		}		
		
		return "Error, must choose an opponent!";
	}
		
	
	}
