using System;
using System.Dynamic;

public class CustomBindingTest
{
	/// <summary>
	/// The entry point of the program, where the program control starts and ends.
	/// </summary>
    static void Main()
    {
        dynamic dObj = new Dog();

        dObj.Bark(); // Bark method was called
        dObj.Run(); // Run method was called
    }
}

public class Dog : DynamicObject
{
	/// <summary>
	/// Tries the invoke member.
	/// </summary>
	/// <returns><c>true</c>, if invoke member was tryed, <c>false</c> otherwise.</returns>
	/// <param name="binder">Binder.</param>
	/// <param name="args">Arguments.</param>
	/// <param name="result">Result.</param>
    public override bool TryInvokeMember(InvokeMemberBinder binder, object[] args, out object result)
    {
        Console.WriteLine(binder.Name + " method was called");

        result = null;

        return true;
    }
}
