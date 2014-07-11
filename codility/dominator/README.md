Dominator
==============

The first task was called Dominator. The goal was to, given a std::vector of integers, find an integer that occurs in more than half of the positions in the vector. If no dominator was found -1 should be returned.

My approach was to loop through the vector from the first to the last element, using a std::map to count the number of occurences of each integer. If the count ever reached above half the size of the vector I stopped and returned that integer and if I reached the end without finding a dominator I returned -1.

So was that a good approach? Well, the reviewer at the company rated the solution as 'pretty ok'. His preferred solution was store the first integer in the array and set a counter to 1. Then loop through the remaining integers in the vector. If the current integer in the vector is the same as the one stored, the counter is increased by one, otherwise the counter is decreased by one. If the counter ever reaches zero you throw away the stored integer and replace it with the current integer in the vector. When you finally have looped through all integers you are left with one candidate. You then need to loop through the vector again and count the occurences of the candidate to verify that this really is a dominator.