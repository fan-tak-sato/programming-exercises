using System;

namespace PolymorphismApplication
{
	class Shape 
	{
		protected int width, height;

		/// <summary>
		/// Initializes a new instance of the <see cref="PolymorphismApplication.Shape"/> class.
		/// </summary>
		/// <param name="a">The alpha component.</param>
		/// <param name="b">The blue component.</param>
		public Shape( int a=0, int b=0)
		{
			width = a;
			height = b;
		}

		/// <summary>
		/// Area this instance.
		/// </summary>
		public virtual int area()
		{
			Console.WriteLine("Parent class area :");
			return 0;
		}
	}

	class Rectangle: Shape
	{
		/// <summary>
		/// Initializes a new instance of the <see cref="PolymorphismApplication.Rectangle"/> class.
		/// </summary>
		/// <param name="a">The alpha component.</param>
		/// <param name="b">The blue component.</param>
		public Rectangle( int a=0, int b=0): base(a, b)
		{

		}

		/// <summary>
		/// Area this instance.
		/// </summary>
		public override int area ()
		{
			Console.WriteLine("Rectangle class area :");
			return (width * height); 
		}
	}

	class Triangle: Shape
	{
		/// <summary>
		/// Initializes a new instance of the <see cref="PolymorphismApplication.Triangle"/> class.
		/// </summary>
		/// <param name="a">The alpha component.</param>
		/// <param name="b">The blue component.</param>
		public Triangle(int a = 0, int b = 0): base(a, b)
		{

		}

		/// <summary>
		/// Area this instance.
		/// </summary>
		public override int area()
		{
			Console.WriteLine("Triangle class area :");
			return (width * height / 2); 
		}
	}

	class Caller
	{
		/// <summary>
		/// Calls the area.
		/// </summary>
		/// <param name="sh">Sh.</param>
		public void CallArea(Shape sh)
		{
			int a;
			a = sh.area();
			Console.WriteLine("Area: {0}", a);
		}
	}

	class Tester
	{
		/// <summary>
		/// The entry point of the program, where the program control starts and ends.
		/// </summary>
		/// <param name="args">The command-line arguments.</param>
		static void Main(string[] args)
		{
			Caller c = new Caller();
			Rectangle r = new Rectangle(10, 7);
			Triangle t = new Triangle(10, 5);
			c.CallArea(r);
			c.CallArea(t);
			Console.ReadKey();
		}
	}
}