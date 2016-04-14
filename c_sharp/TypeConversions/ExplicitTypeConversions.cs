using System;

namespace TypeConversionApplication 
{
	class ExplicitConversion 
	{
		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			 double d = 5673.74; 
			 int i;
			 
			 // cast double to int
			 i = (int) d;

			 Console.WriteLine(i);
			 Console.ReadKey();
		}
	}
}