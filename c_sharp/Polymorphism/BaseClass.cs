public class BaseClass
{
    public virtual void DoWork() { }
    public virtual int WorkProperty
    {
        get { return 0; }
    }
}

public class DerivedClass : BaseClass
{
    public override void DoWork() { }

    public override int WorkProperty
    {
        get { return 0; }
    }
}

// Usage:
DerivedClass B = new DerivedClass();
B.DoWork();  // Calls the new method.

BaseClass A = (BaseClass)B;
A.DoWork();  // Also calls the new method.
