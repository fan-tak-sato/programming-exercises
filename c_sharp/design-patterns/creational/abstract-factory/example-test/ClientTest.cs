using System;
using NUnit.Framework;
using GangOfFour.Creational;

namespace AbstractFactoryTest
{
    [TestFixture]
    public class ClientTest
    {
        private Client _client;

        [SetUp]
        public void SetUp()
        {
            GangOfFour.Creational.AbstractFactory factory1 = new ConcreteFactory1();

            _client = new Client(factory1);
        }

        [TearDown]
        public void TearDown()
        {

        }

        [Test]
        public void ClientInstanceTest()
        {
            Assert.That(_client, Is.InstanceOf<Client>());
        }
    }
}
