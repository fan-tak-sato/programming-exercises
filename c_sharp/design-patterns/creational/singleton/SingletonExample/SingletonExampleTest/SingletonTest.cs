using System;
using NUnit.Framework;
using GangOfFour.Structural;

namespace SingletonExampleTest
{
    [TestFixture]
    public class SingletonTest
    {
        [Test]
        public void InstanceTest()
        {
            Singleton s1 = Singleton.Instance();
            Singleton s2 = Singleton.Instance();

            Assert.AreEqual(s1, s2);
        }
    }
}
