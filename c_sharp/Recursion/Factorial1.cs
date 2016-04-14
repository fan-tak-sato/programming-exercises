using System;

namespace CalculatorApplication
{
	class NumberManipulator
	{
		/// <summary>
		/// Factorial the specified num.
		/// </summary>
		/// <param name="num">Number.</param>
		public int factorial(int num)
		{
			int result;

			if (num == 1)
			{
				return 1;
			}
			else
			{
				result = factorial(num - 1) * num;
				return result;
			}
		}

		/// <summary>
		/// Calling the factorial method
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			NumberManipulator n = new NumberManipulator();

			Console.WriteLine("Factorial of 6 is : {0}", n.factorial(6));
			Console.WriteLine("Factorial of 7 is : {0}", n.factorial(7));
			Console.WriteLine("Factorial of 8 is : {0}", n.factorial(8));
			Console.ReadLine();
		}
	}
}