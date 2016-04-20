using System;

namespace GangOfFour.Creational
{
    /// <summary>
    /// The 'Client' class. Interaction environment for the products.
    /// </summary>
    public class Client
    {
        private AbstractProductA _abstractProductA;
        private AbstractProductB _abstractProductB;

        /// <summary>
        /// Constructor
        /// </summary>
        /// <param name="factory"></param>
        public Client(AbstractFactory factory)
        {
            _abstractProductB = factory.CreateProductB();
            _abstractProductA = factory.CreateProductA();
        }

        public void Run()
        {
            _abstractProductB.Interact(_abstractProductA);
        }
    }
}
