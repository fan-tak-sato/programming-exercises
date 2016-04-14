using System;

public class Program
{
    private static int _checkIfNumberIsGreater(int number)
    {
        return number > 10 ? number : 0;
    }

    public static void Main()
    {
		Console.Write("Enter a number greater than 10: ");

		int number = Convert.ToInt32(Console.ReadLine());

		Console.WriteLine("Result = {0}.", Program._checkIfNumberIsGreater(number));
		do {
			while(! Console.KeyAvailable) {

			}       
		} while (Console.ReadKey(true).Key != ConsoleKey.Escape);
    }
}
