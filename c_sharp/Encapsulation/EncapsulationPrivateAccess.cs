using System;

namespace RectangleApplication 
{
	class Rectangle
	{
		private double length;
		private double width;

		/// <summary>
		/// Acceptdetails this instance.
		/// </summary>
		public void Acceptdetails()
		{
			Console.WriteLine("Enter Length: ");
			length = Convert.ToDouble(Console.ReadLine());

			Console.WriteLine("Enter Width: ");
			width = Convert.ToDouble(Console.ReadLine());
		}

		/// <summary>
		/// Gets the area.
		/// </summary>
		/// <returns>The area.</returns>
		public double GetArea()
		{
			return length * width;
		}

		/// <summary>
		/// Display this instance.
		/// </summary>
		public void Display()
		{
			Console.WriteLine("Length: {0}", length);
			Console.WriteLine("Width: {0}", width);
			Console.WriteLine("Area: {0}", GetArea());
		}
	}

	class ExecuteRectangle
	{
		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			Rectangle r = new Rectangle();
			r.Acceptdetails();
			r.Display();
			Console.ReadLine();
		}
	}
}
