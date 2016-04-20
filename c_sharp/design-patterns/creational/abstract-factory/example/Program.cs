﻿using System;
using GangOfFour.Creational;

namespace AbstractFactory
{
    /// <summary>
    /// MainApp startup class for Structural
    /// Abstract Factory Design Pattern.
    /// </summary>
    class MainApp
    {
        /// <summary>
        /// Entry point into console application.
        /// </summary>
        public static void Main()
        {
            // Abstract factory #1
            GangOfFour.Creational.AbstractFactory factory1 = new ConcreteFactory1();
            Client client1 = new Client(factory1);
            client1.Run();

            // Abstract factory #2
            GangOfFour.Creational.AbstractFactory factory2 = new ConcreteFactory2();
            Client client2 = new Client(factory2);
            client2.Run();

            // Wait for user input
            Console.ReadKey();
        }
    }
}
