#include <cstddef>
#include <vector>

int getDominator(const std::vector<int>& A)
{
	if (A.empty())
	{
		return -1;
	}

	int counter = 1;
	int candidate = A[0];

	for (std::size_t i = 1; i < A.size(); ++i)
	{
		if (A[i] == candidate)
		{
			++counter;
		}
		else
		{
			--counter;
			if (0 == counter)
			{
				candidate = A[i];
				counter = 1;
			}
		}
	}

	counter = 0;
	for (std::size_t i = 0; i < A.size(); ++i)
	{
		if (A[i] == candidate)
		{
			++counter;
		}
	}
	
	int dominator = -1;
	if (counter > (A.size() / 2))
	{
		dominator = candidate;
	}

	return dominator;
}