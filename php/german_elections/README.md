Task
=======

In some German federal states' elections the parliamentary seats are distributed as follows. The seats allocated to a party are calculated by this method in two steps:
In the first step the corresponding number of votes that are attributable to a party is multiplied by the total number of available seats and divided by the total number of valid votes.
In the second step the result is split into the integer portion and the rest. The integer parts are attributed to the respective party as seats. The remaining seats are allocated to parties in the order of the size of the fractional portions.
Exemplary data (assuming all votes are valid): 
Total seats: 15
Votes: A => 15000, B => 5400, C => 5500, D => 5550
Result should be 
Seats: A => 7, B => 2, C = 3, D = > 3

Write a class that calculates  for a variable number of parties and seats and include the needed two lines how to call your class

HELP:

In some German federal states elections the parliamentary seats are distributed as follows. The seats allocated to a party are calculated by this method in two steps:
In the first step the corresponding number of votes that are attributable to a party is multiplied by the total number of available seats and divided by the total number of valid votes.
In the second step the result is split into the integer portion and the rest. The integer parts are attributed to the respective party as seats. The remaining seats are allocated to parties in the order of the size of the fractional portions.
Exemplary data (assuming all votes are valid):
Total seats: 15
Votes: A => 15000, B => 5400, C => 5500, D => 5550

Example for calculation:

In First step we do the calculation:
A = > 15000 * 15 /31450 = 7.1542
B = > 5400  * 15 /31450 = 2.5755
C = > 5500  * 15 /31450 = 2.6232
D = > 5550  * 15 /31450 = 2.6470

In Second Step we split the integer part and the fractional part
A -> 7 -> 0.1542
B -> 2 -> 0.5755
C -> 2 -> 0.6232
D -> 2 -> 0.6470
Now attribute the integer Parts: A -> 7, B -> 2, C -> 2, D -> 2
Now 13 of 15 seats are attributed -> that means 2 remaining seats

First one goes to D because 0.6470 is the biggest fractional part
second/last remaining goes to C because 0.6232 is the second big fractional part.

Result: 
A -> 7, B -> 2, C -> 2+1, D -> 2+1