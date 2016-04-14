using System;
using System.Collections;

class Program
{
    /// <summary>
    /// Create an ArrayList and add two ints and print them with a method
    /// </summary>
    static void Main()
    {
        ArrayList list = new ArrayList();
        list.Add(5);
        list.Add(7);

        Example(list);
    }

    /// <summary>
    /// Use ArrayList with method.
    /// </summary>
    /// <param name="list"></param>
    static void Example(ArrayList list)
    {
        foreach (int i in list)
        {
            Console.WriteLine(i);
        }
    }
}