using System;
using System.Collections;

class Program
{
    static void Main()
    {
        // Create an ArrayList with two values.
        ArrayList list = new ArrayList();
        list.Add(5);
        list.Add(7);

        // Second ArrayList.
        ArrayList list2 = new ArrayList();
        list2.Add(10);
        list2.Add(13);

        // Add second ArrayList to first.
        list.AddRange(list2);

        // Display the values.
        foreach (int i in list)
        {
            Console.WriteLine(i);
        }
    }
}