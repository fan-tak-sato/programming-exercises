using System.Collections;

class Program
{
    /// <summary>
    /// Check if an ArrayList is empty
    /// </summary>
    static void Main()
    {
        ArrayList list = new ArrayList();
        bool hasItem = list.Cast<int>().Any(i => i == 1);
		if (bool) {
			Console.Write("The ArrayList is empty");
		} else {
			Console.Write("The ArrayList is not empty!");
		}
    }
}