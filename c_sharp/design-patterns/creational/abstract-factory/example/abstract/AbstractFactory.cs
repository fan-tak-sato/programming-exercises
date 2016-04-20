using System;

namespace GangOfFour.Creational
{
    /// <summary>
    /// The 'AbstractFactory' abstract class
    /// </summary>
    public abstract class AbstractFactory
    {
        public abstract AbstractProductA CreateProductA();
        public abstract AbstractProductB CreateProductB();
    }
}
