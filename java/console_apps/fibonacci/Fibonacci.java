/**
* Filename  : Fibonacci.java
* Dependency: None
* Author    : Sheng Yu (codesays.com)
* Create at : 2014-08-01
* JDK used  : 1.7
* Change log: None
*/

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.StreamTokenizer;
import java.util.ArrayList;
import java.util.List;

public class Fibonacci {
    // There are multiple inquiries on Fibonacci numbers. Cache the previous
    // computing result for later usage.
    private List<Long> cache = new ArrayList<Long>();
    private Integer cacheCount = 0;

    public Fibonacci() {
        // Initialize the cache system with F(0) and F(1).
        cache.add(0L);
        cache.add(1L);
        cacheCount = 2;
    }

    /**
     * Get one specific Fibonacci number.
     * @param   n: the n(th) Fibonacci number to return. Zero-based numbering.
     * @return  long: the n(th) Fibonacci number.
     */
    public Long getFibonacci(Integer n) {
        if (n >= cacheCount) {
            // If we have not computed the F(n).
            Long temp;
            for (int i = cacheCount; i <= n; ++i) {
                temp = cache.get(i-2) + cache.get(i-1);
                cache.add(temp);
            }
            cacheCount = n + 1;
        }

        return cache.get(n);
    }

    public static void main(String[] args) throws IOException {
        StreamTokenizer st = new StreamTokenizer(new BufferedReader(
                                    new InputStreamReader(System.in)));
        Fibonacci FibComputer = new Fibonacci();

        while (st.nextToken() != StreamTokenizer.TT_EOF) {
            System.out.println(FibComputer.getFibonacci((int)st.nval));
        }

    }
}
