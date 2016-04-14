using System;
using System.Collections;

class Program
{
    static void Main()
    {
		// Create an ArrayList with two values.
		ArrayList list = new ArrayList();
		list.Add(9);
		list.Add(10);
		
		// Show number of elements in ArrayList.
		Console.WriteLine(list.Count);

		// Clear the ArrayList.
		list.Clear();

		// Show count again.
		Console.WriteLine(list.Count);
    }
}
