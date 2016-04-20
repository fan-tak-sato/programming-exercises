using System;

namespace GangOfFour.Creational
{
    /// <summary>
    /// The 'ConcreteFactory1' class
    /// </summary>
    public class ConcreteFactory1 : AbstractFactory
    {
        public override AbstractProductA CreateProductA()
        {
            return new ProductA1();
        }

        public override AbstractProductB CreateProductB()
        {
            return new ProductB1();
        }
    }
}
