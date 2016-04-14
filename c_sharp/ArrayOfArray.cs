using System;

public class Program
{
    public static void Main()
    {
        int[,] numbers = { { 1, 2, 3, 4, 5 },
                           { 6, 7, 8, 9, 10 },
                           { 11, 12, 13, 14, 15 }
                         };
		/*
		// type all numbers in 1 line
        foreach (int number in numbers)
		{
            Console.Write(number + " ");
        }
		*/
		
		for (int row = 0; row < numbers.GetLength(0); row++)
        {
            for (int col = 0; col < numbers.GetLength(1); col++)
            {
                Console.Write(numbers[row, col] + " ");
            }

            Console.WriteLine();
        }
		
    }
}
