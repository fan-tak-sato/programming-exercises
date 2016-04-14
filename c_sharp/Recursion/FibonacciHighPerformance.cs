using System;

class Program
{
    /// <summary>
    /// In N steps compute Fibonacci sequence iteratively
    /// </summary>
    /// <param name="n"></param>
    /// <returns></returns>
    public long Fibonacci(int n)
    {
        if (n < 2)
            return n;
        long[] f = new long[n + 1];
        f[0] = 0;
        f[1] = 1;

        for (int i = 2; i <= n; i++)
        {
            f[i] = f[i - 1] + f[i - 2];
        }
        return f[n];
    }

    /// <summary>
    /// Print the Fibonacci series
    /// </summary>
    static void Main()
    {
        for (int i = 0; i < 15; i++)
        {
            Console.WriteLine(Fibonacci(i));
        }
    }
}