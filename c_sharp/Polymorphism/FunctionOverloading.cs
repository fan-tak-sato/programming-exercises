using System;

namespace PolymorphismApplication
{
	class Printdata
	{
		/// <summary>
		/// Print the specified i.
		/// </summary>
		/// <param name="i">The index.</param>
		void print(int i)
		{
			Console.WriteLine("Printing int: {0}", i );
		}

		/// <summary>
		/// Print the specified f.
		/// </summary>
		/// <param name="f">F.</param>
		void print(double f)
		{
			Console.WriteLine("Printing float: {0}" , f);
		}

		/// <summary>
		/// Print the specified s.
		/// </summary>
		/// <param name="s">S.</param>
		void print(string s)
		{
			Console.WriteLine("Printing string: {0}", s);
		}

		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			Printdata p = new Printdata();

			// Call print to print integer
			p.print(5);

			// Call print to print float
			p.print(500.263);

			// Call print to print string
			p.print("Hello C++");
			Console.ReadKey();
		}
	}
}