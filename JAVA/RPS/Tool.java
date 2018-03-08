
public class Tool {
	protected int strength;
	protected char type;
		
		//constructor
	public Tool() {
		strength = 0;
		type = 'x';				
	}
	
	public Tool(int strength, char type) {
		this.strength = strength;
		this.type = type;
	}
	//instance method:
	public void setStrength(int strength) {
		this.strength = strength;
	}
}
