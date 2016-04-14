using System;

namespace CalculatorApplication
{
	class NumberManipulator
	{
		/// <summary>
		/// Factorial the specified num.
		/// </summary>
		/// <param name="num">Number.</param>
        public long Factorial(int n)
        {
            if (n == 0) // The condition that limites the method for calling itself
                return 1;
            return n * Factorial(n - 1);
        }

		/// <summary>
		/// Calling the factorial method
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			NumberManipulator n = new NumberManipulator();

			Console.WriteLine("Factorial of 6 is : {0}", n.Factorial(6));
			Console.WriteLine("Factorial of 7 is : {0}", n.Factorial(7));
			Console.WriteLine("Factorial of 8 is : {0}", n.Factorial(8));
			Console.ReadLine();
		}
	}
}