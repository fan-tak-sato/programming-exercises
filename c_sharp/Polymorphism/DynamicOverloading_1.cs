using System;
namespace PolymorphismApplication
{
	abstract class Shape
	{
		public abstract int area();
	}

	class Rectangle:  Shape
	{
		private int length;
		private int width;

		/// <summary>
		/// Initializes a new instance of the <see cref="PolymorphismApplication.Rectangle"/> class.
		/// </summary>
		/// <param name="a">The alpha component.</param>
		/// <param name="b">The blue component.</param>
		public Rectangle( int a=0, int b=0)
		{
			length = a;
			width = b;
		}

		/// <summary>
		/// Area this instance.
		/// </summary>
		public override int area ()
		{ 
			Console.WriteLine("Rectangle class area :");
			return (width * length); 
		}
	}

	class RectangleTester
	{
		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			Rectangle r = new Rectangle(10, 7);
			double a = r.area();
			Console.WriteLine("Area: {0}",a);
			Console.ReadKey();
		}
	}
}