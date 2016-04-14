using System;

namespace TypeConversionApplication 
{
	class StringConversion
	{
		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			int i = 75;
			float f = 53.005f;
			double d = 2345.7652;
			bool b = true;

			Console.WriteLine(i.ToString());
			Console.WriteLine(f.ToString());
			Console.WriteLine(d.ToString());
			Console.WriteLine(b.ToString());
			Console.ReadKey();
		}
	}
}