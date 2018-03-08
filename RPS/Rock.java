
public class Rock extends Tool
{
	public Rock(int strength, char type)
	{
		super(strength, type);
	}
	
	public String fight(Tool opponent) 
	{
		
		if (opponent.type == 's')
		{
			
			
			if(this.strength*2 > opponent.strength) 
			{
				return "Rock Wins!!";
			}
			else
			{
				return "Scissor Wins!!";
			}
		}
		else if (opponent.type == 'p')
		{
			
			
			if(this.strength/2 > opponent.strength) 
			{
				return "Rock Wins!!";
			}
			else if(this.strength/2 == opponent.strength)
			{
				return "It's a tie!";
			}
			else 
			{
				return "Paper Wins!!";
			}
			
		}	
		
		return "Error, must choose an opponent!";
	}
}
