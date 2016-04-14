using System;

namespace RectangleApplication
{
    class Rectangle
    {
        internal double length;
        internal double width;

        /// <summary>
        /// Get the Rectangle area
        /// </summary>
        /// <returns></returns>
        double GetArea()
        {
            return length * width;
        }

        /// <summary>
        /// Enter Length and width to calculate  the rectangle area
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
        /// Main program
        /// </summary>
        /// <param name="args"></param>
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
