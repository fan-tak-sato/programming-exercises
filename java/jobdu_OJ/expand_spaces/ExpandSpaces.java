/**
* Filename  : ExpandSpaces.java
* Dependency: None
* Author    : Sheng Yu (codesays.com)
* Create at : 2014-07-30
* JDK used  : 1.7
* Changelog : None
*/

import java.util.Scanner;

public class ExpandSpaces {
    /**
     * Expand all spaces in a given string into %20.
     */
    public static void main(String[] args) {
        Scanner cin     = new Scanner(System.in);
        ExpandSpaces expander   = new ExpandSpaces();
        System.out.println(expander.expandSpaces(cin.nextLine()));
        cin.close();
    }

    /**
     * Expand all spaces into %20.
     * @param     input         : the original string.
     * @return    a string      : the result of expanding spaces in original string.
     */
    private String expandSpaces(String input) {
        StringBuilder original = new StringBuilder(input);

        // Compute the lengths of the original and expanded strings.
        int oldLen = original.length();
        int newLen = 0;
        for (int i = 0; i < oldLen; ++i) {
            if (original.charAt(i) == ' ') {
                newLen += 3;
            }
            else {
                newLen += 1;
            }
        }

        // Allocate enought space for expanding spaces.
        original.setLength(newLen);

        // Expanding the spaces from end to beginning.
        while (--oldLen >= 0) {
            if (original.charAt(oldLen) == ' ') {
                original.setCharAt(--newLen, '0');
                original.setCharAt(--newLen, '2');
                original.setCharAt(--newLen, '%');
            }
            else {
                original.setCharAt(--newLen, original.charAt(oldLen));
            }
        }

        return original.toString();
    }
}
