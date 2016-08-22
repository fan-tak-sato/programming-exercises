/**
* Filename  : FindIn2DArray.java
* Dependency: None
* Author    : Sheng Yu (codesays.com)
* Create at : 2014-07-30
* JDK used  : 1.7
* Changelog : None
*/

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.StreamTokenizer;

public class FindIn2DArray {
    /**
     * From the stdin, get a 2D array and a number. Check whether
     * the number is in the array.
     * @exception   IOException: if error happens in reading from stdin.
     */
    public static void main(String[] args) throws IOException {
        StreamTokenizer st = new StreamTokenizer(new BufferedReader(
                                 new InputStreamReader(System.in)));

        int row, column;    // Record the number of rows and columns.
        int toFind;            // The number to find in the 2D array.
        FindIn2DArray finder = new FindIn2DArray();    // For test usage.

        while (st.nextToken() != StreamTokenizer.TT_EOF) {
            // Starting a new test case.
            // Read the number of rows in this case.
            row = (int)st.nval;
            st.nextToken();

            // Read the number of columns.
            column = (int)st.nval;
            st.nextToken();

            // Read the number to find.
            toFind = (int)st.nval;

            // Read the test 2D array.
            int [][] matrix = new int[row][column];
            for (int i = 0; i < row; ++i) {
                for (int j = 0; j < column; ++j) {
                    st.nextToken();
                    matrix[i][j] = (int)st.nval;
                }
            }

            // Check whether the number is in the 2D array.
            if (finder.findIn2DArray(matrix, 0, row-1, 0, column-1, toFind)) {
                System.out.println("Yes");
            }
            else {
                System.out.println("No");
            }
        }
    }

    /**
     * Searches for the integer in the row-sorted and column-sorted 2D array matrix.
     * @param     matrix        : a 2D array.
     * @param     rowBegin      : the begin row (inclusive) of matrix to search.
     * @param     rowEnd        : the end row (inclusive) of matrix to search.
     * @param     columnBegin   : the begin column (inclusive) of matrix to search.
     * @param     columnEnd     : the end column (inclusive) of matrix to search.
     * @param     toFind        : an integer to find inside matrix.
     * @return    a boolean     : true if toFind is in matrix; false otherwise.
     */
    private boolean findIn2DArray(int[][] matrix, int rowBegin, int rowEnd,
                                  int columnBegin, int columnEnd, int toFind) {
        // Terminate case for this recursive function. Did not find toFind yet.
        if (rowBegin > rowEnd)                return false;
        if (columnBegin > columnEnd)        return false;

        // The middle point of this 2D array.
        int midRow = (rowBegin + rowEnd) / 2;
        int midColumn = (columnBegin + columnEnd) / 2;

        if (matrix[midRow][midColumn] == toFind) {
            // Find it!
            return true;
        }
        else if (matrix[midRow][midColumn] > toFind) {
            // If we divide the matrix with the midRow and midColumn into four pieces,
            // toFind is impossible to be in the lower right sub-matrix.

            // Try to find toFind in the upper left and lower left sub-matrix.
            if (findIn2DArray(matrix, rowBegin, rowEnd, columnBegin, midColumn-1, toFind)) {
                return true;
            }

            // Try to find toFind in the upper right sub-matrix.
            if (findIn2DArray(matrix, rowBegin, midRow-1, midColumn, columnEnd, toFind)) {
                return true;
            }

            return false;
        }
        else {
            // If we divide the matrix with the midRow and midColumn into four pieces,
            // toFind is impossible to be in the upper left sub-matrix.

            // Try to find toFind in the lower left and lower right sub-matrix.
            if (findIn2DArray(matrix, midRow+1, rowEnd, columnBegin, columnEnd, toFind)) {
                return true;
            }

            // Try to find toFind in the upper right sub-matrix.
            if (findIn2DArray(matrix, rowBegin, midRow, midColumn+1, columnEnd, toFind)) {
                return true;
            }

            return false;
        }
    }
}
