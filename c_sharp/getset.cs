class Person
{
    private string name; // field name
    public string Name // property \ object
    {
        get
        {
            return name;
        }
        set
        {
            name = value;
        }
    }
}

// USAGE:
Person person = new Person();
person.Name = "Joe"; // the set accessor is invoked here

System.Console.Write(person.Name);  // the get accessor is invoked here
