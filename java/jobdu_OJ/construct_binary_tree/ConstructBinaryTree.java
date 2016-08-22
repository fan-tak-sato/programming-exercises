/**
* Filename  : ConstructBinaryTree.java
* Dependency: None
* Author    : Sheng Yu (codesays.com)
* Create at : 2014-07-31
* JDK used  : 1.7
* Change log: None
*/

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.StreamTokenizer;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Stack;
import java.util.Arrays;

/**
 * Definition for binary tree and its operation.
 */
class BinaryTreeNode {
    public Object val;
    public BinaryTreeNode left;
    public BinaryTreeNode right;

    /**
     * The constructor of binary tree node.
     * @param   x: an object to be the value of this ListNode.
     */
    public BinaryTreeNode(Object x) {
        val = x;
        left = right = null;
    }
}

/**
 * Test class for rebuilding the binary tree.
 * @author Sheng Yu (codesays.com)
 */
public class ConstructBinaryTree {
    public static void main(String[] args) throws IOException {
        StreamTokenizer st = new StreamTokenizer(new BufferedReader(
                                    new InputStreamReader(System.in)));
        int size = 0;
        ConstructBinaryTree treeBuilder = new ConstructBinaryTree();

        while (st.nextToken() != StreamTokenizer.TT_EOF) {
            // Start a new test case.
            size = (int) st.nval;

            // Get the result of pre-order traversal.
            Integer[] preOrder  = new Integer[size];
            for (int i = 0; i < size; ++i) {
                st.nextToken();
                preOrder[i] = (int) st.nval;
            }

            // Get the result of in-order traversal.
            Integer[] inOrder   = new Integer[size];
            for (int i = 0; i < size; ++i) {
                st.nextToken();
                inOrder[i] = (int) st.nval;
            }

            // Rebuild the tree from the pre-order and in-order traversal result.
            BinaryTreeNode root = treeBuilder.rebuildTree(Arrays.asList(preOrder),
                                                          Arrays.asList(inOrder));

            if (root == null) {
                System.out.println("No");
            }
            else {
                // Do a post order traversal. And show the result
                Object[] postOrder = treeBuilder.postOrder(root);

                for (int i = 0; i < size; ++i) {
                    System.out.print(postOrder[i]);
                    System.out.print(" ");
                }
                System.out.println();
            }
        }
    }

    /**
     * Rebuild the binary tree from the pre-order and in-order traversal result.
     * @param   preOrder        : the pre order traversal result of the binary tree.
     * @param   inOrder         : the in order traversal result of the binary tree.
     * @return  BinaryTreeNode  : the head node of the rebuilt tree.
     *                            null if fails.
     */
    public BinaryTreeNode rebuildTree(List<Integer> preOrder, List<Integer> inOrder) {
        // The size of pre-order and in-order traversal results should be the same.
        if (preOrder.size() != inOrder.size())      return null;

        // Reach the leaf.
        if (preOrder.size() == 1) {
            if (preOrder.get(0) == inOrder.get(0))  return new BinaryTreeNode(preOrder.get(0));
            else                                    return null;
        }

        // Create the root node of current (sub)tree.
        BinaryTreeNode root = new BinaryTreeNode(preOrder.get(0));
        int splitPoint = inOrder.indexOf(preOrder.get(0));
        if (splitPoint == -1)                       return null;

        // Create the left son recursively, if exist.
        BinaryTreeNode left = null;
        if (splitPoint != 0) {
            left = rebuildTree(preOrder.subList(1, 1+splitPoint), inOrder.subList(0, splitPoint));
            if (left == null)                       return null;
        }
        root.left = left;

        // Create the right son recursively, if exist.
        BinaryTreeNode right = null;
        if (splitPoint != inOrder.size()-1) {
            right = rebuildTree(preOrder.subList(1+splitPoint, preOrder.size()),
                                                 inOrder.subList(1+splitPoint, inOrder.size()));

            if (right == null)                      return null;
        }
        root.right = right;

        return root;
    }

    /**
     * Get the result of post-order traversal o given binary tree.
     * @param   root        : the root of a binary tree.
     * @return  Object[]    : the result of post-order traversal on the rebuilt tree.
     */
    public Object[] postOrder(BinaryTreeNode root) {
        Stack<BinaryTreeNode> prepare = new Stack<BinaryTreeNode>();
        Stack<BinaryTreeNode> toVisit = new Stack<BinaryTreeNode>();
        prepare.add(root);

        BinaryTreeNode current = null;
        while (!prepare.empty()) {
            current = prepare.pop();
            if (current.left != null)   prepare.add(current.left);
            if (current.right != null)  prepare.add(current.right);

            toVisit.add(current);
        }

        ArrayList<Object> result = new ArrayList<Object>();
        while (!toVisit.empty()) {
            current = toVisit.pop();
            result.add(current.val);
        }

        return result.toArray();
    }
}
