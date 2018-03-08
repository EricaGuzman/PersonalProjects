
public class TestRps {

	public static void main(String[] args) {
		//instances of each class for testing 
		Scissors s1 = new Scissors(5, 's');
		Rock r1 = new Rock(15, 'r');
		Paper p1 = new Paper(7,'p');
		
		System.out.println(s1.fight(p1) + ", " + p1.fight(s1));
		System.out.println(p1.fight(r1) + ", " + r1.fight(p1));
		System.out.println(r1.fight(s1) + ", " + s1.fight(r1));

	}

}
