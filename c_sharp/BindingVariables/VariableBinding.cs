using System;

public class Hello
{
	/// <summary>
	/// Mean the specified xObj and yObj.
	/// </summary>
	/// <param name="xObj">X object.</param>
	/// <param name="yObj">Y object.</param>
	static dynamic Mean(dynamic xObj, dynamic yObj)
	{
		return (xObj + yObj) / 2;
	}

	/// <summary>
	/// The entry point of the program, where the program control starts and ends.
	/// </summary>
	static void Main()
	{
		int xObj = 3, yObj = 4;

		Console.WriteLine("Prova: " + Mean(xObj, yObj) );
	}
}