using System;
using NUnit.Framework;
using GangOfFour.Creational.Singleton;

namespace GangOfFour.Creational.Singleton
{
	[TestFixture()]
	public class Test
	{
		[Test()]
		public void TestString()
		{
			LoadBalancer b1 = LoadBalancer.GetLoadBalancer();

			Assert.True( loadBalancer.ToString() );
		}
	}
}
