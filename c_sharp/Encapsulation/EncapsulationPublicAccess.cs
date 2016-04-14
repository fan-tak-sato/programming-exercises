using System;

namespace RectangleApplication
{
    class Rectangle
    {
        public double length;
        public double width;

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

            r.length = 4.5;
            r.width = 3.5;
            r.Display();

            Console.ReadLine();
        }
    }
}