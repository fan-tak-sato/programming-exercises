using System;

delegate int NumberChanger(int n);

namespace DelegateAppl
{
	class TestDelegate
	{
		static int num = 10;

		/// <summary>
		/// Adds the number.
		/// </summary>
		/// <returns>The number.</returns>
		/// <param name="p">P.</param>
		public static int AddNum(int p)
		{
			num += p;
			return num;
		}

		/// <summary>
		/// Mults the number.
		/// </summary>
		/// <returns>The number.</returns>
		/// <param name="q">Q.</param>
		public static int MultNum(int q)
		{
			num *= q;
			return num;
		}
		public static int getNum()
		{
			return num;
		}

		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			//create delegate instances
			NumberChanger nc1 = new NumberChanger(AddNum);
			NumberChanger nc2 = new NumberChanger(MultNum);

			//calling the methods using the delegate objects
			nc1(25);
			Console.WriteLine("Value of Num: {0}", getNum());
			nc2(5);
			Console.WriteLine("Value of Num: {0}", getNum());
			Console.ReadKey();
		}
	}
}