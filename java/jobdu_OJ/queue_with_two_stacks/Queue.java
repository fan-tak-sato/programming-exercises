/**
* Filename  : QueueWithTwoStacks.java
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
import java.util.NoSuchElementException;
import java.util.Stack;

/**
 *
 * @author Sheng Yu (codesays.com)
 *
 * @param <T>: the type of the element in the queue.
 */
class Queue<T> {
    // Every element enter the entrance stack firstly, and then switch to
    // exit stack waiting to be popped out.
    private Stack<T> entrance   = new Stack<T>();
    private Stack<T> exit       = new Stack<T>();

    /**
     * Remove the oldest element in the queue and return it.
     * @return the oldest element in the queue.
     * @throws NoSuchElementException: when the queue is empty.
     */
    public T remove() throws NoSuchElementException {
        if (exit.empty()) {
            if (entrance.empty()) {
                throw new NoSuchElementException("Queue is empty.");
            }
            else {
                // Move all elements in entrance stack to exit stack.
                while (!entrance.empty()) {
                    exit.push(entrance.pop());
                }
            }
        }

        return exit.pop();
    }

    /**
     * Add a new element to the queue.
     * @param element: the new element to add to queue.
     */
    public void add(T element) {
        entrance.add(element);
    }
}

public class QueueWithTwoStacks {
    public static void main(String[] args) throws IOException, IllegalArgumentException {
        StreamTokenizer st = new StreamTokenizer(new BufferedReader(
                new InputStreamReader(System.in)));

        // Get the number of following instructions. But actually
        // it is useless.
        int instructionCount = -1;
        if (st.nextToken() != StreamTokenizer.TT_EOF) {
            instructionCount = (int)st.nval;
        }

        Queue<Integer> test = new Queue<Integer>();
        boolean popSuc = true;
        Integer oldestElement = 0;
        String instruction = null;

        while (st.nextToken() != StreamTokenizer.TT_EOF) {
            instruction = st.sval;
            if (instruction.equalsIgnoreCase("POP")) {
                try{
                    popSuc = true;
                    oldestElement = test.remove();
                }
                catch (NoSuchElementException e) {
                    // Failed to pop something.
                    popSuc = false;
                    System.out.println(-1);
                }
                if (popSuc) {
                    // Successful to pop something.
                    System.out.println(oldestElement);
                }
            }
            else if (instruction.equalsIgnoreCase("PUSH")){
                st.nextToken();
                test.add((int)st.nval);
            }
            else {
                throw new IllegalArgumentException(instruction + "is invalid.");
            }
        }
    }
}
