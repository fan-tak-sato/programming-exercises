#include <iostream>
using namespace std;

int getPass(int* A, int N)
{
    unsigned long count = 0;
    int incrementVal = 0;
    for(int i = 0; i < N; i++)
    {
        if(A[i]==0)
        {
            incrementVal++;
        }
        else if (A[i]==1)
        {
            count = count + incrementVal;
        }
        if(count > 1000000000) return -1;
    }
    return count;
}

int main()
{
   int A[]={0,1,0,1,1};
   int size = 5;
   int numPasses = getPass(A,size);
   cout << "Number of Passes: " << numPasses << endl;
}