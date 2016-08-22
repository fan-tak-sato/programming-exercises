/**
* Filename  : PrintListFromEnd.java
* Dependency: None
* Author    : Sheng Yu (codesays.com)
* Create at : 2014-07-31
* JDK used  : 1.7
* Changelog : None
*/

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.StreamTokenizer;
import java.util.Stack;
import java.io.IOException;

/**
 * Definition for singly-linked list and its operation.
 */
class ListNode {
    public Object val;
    public ListNode next;

    /**
     * The constructor of ListNode
     * @param   x: an object to be the value of this ListNode.
     */
    public ListNode(Object x) {
        val = x;
        next = null;
    }

    /**
     * Print a list from the end to the beginning.
     * @param   head: the head node of the to-print list.
     */
    static public void printListFromEnd(ListNode head) {
        Stack<Object> values = new Stack<Object>();

        // Travel the list from beginning to end, and push the value of
        // all nodes into the stack.
        ListNode current = head;
        while (current != null) {
            values.push(current.val);
            current = current.next;
        }

        // Pop the stack and print the popped item, until the stack is empty.
        // Because the FILO of stack, the tailing nodes are printed before
        // the head part.
        while (!values.empty()) {
            System.out.println(values.pop());
        }

        return;
    }
}

public class PrintListFromEnd {
    public static void main(String[] args) throws IOException {
       StreamTokenizer st = new StreamTokenizer(new BufferedReader(
                                    new InputStreamReader(System.in)));

       int nextNum = -1;
       ListNode pseudoHead = new ListNode(-1);
       ListNode current = pseudoHead;

       // Construct the list from stdin.
       while (st.nextToken() == StreamTokenizer.TT_NUMBER) {
           nextNum = (int)st.nval;
           if (nextNum == -1)       break;

           current.next = new ListNode(nextNum);
           current = current.next;
       }

       // Print the list in reversed order.
       ListNode.printListFromEnd(pseudoHead.next);
    }

}
