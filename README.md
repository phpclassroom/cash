# Change

In Malaysia, most restaurants and convenience stores usually want to minimize the number of coins that they're giving out as change to customers lest they run out. In computer science, there is an algorithm which provides an implementation on how to do just that **(Greedy algorithm)**.

In terms of our problem, suppose a that a mamak cashier has some change in the register of fifty cents, twenty cents, ten cents, five cents, and one cents. The problem to be solved is to decide which coins and how many of each to dispense to the customer. For example, if a customer is owed 90 cents, a 'greedy cashier' would take the biggest valued coin available (50¢) and then reach for a smaller valued coin (20¢) in order to save up on coins. 
 
So long as abang mamak has enough of each coin, this largest-to-smallest approach will yield the fewest coins possible. 

## Implementation Details
In index.php, the specification for a program has been written which will prompt a user for the number of cents that a customer is owed, and then prints out the fewest number of coins which can be dispensed as change. Your task is to complete the implementation logic for the functions in change.php so that given a user input for change owed, the program will return the fewest number of coins to be returned to the customer.  

Specifically:

`'get_cents'` should prompt the user for change owed in cents. If the user provides a non-integer (string) or a negative number, your code should prompt the user again. 

Implement `'calc_fifty_cents'` so that the function calculates (and returns as an int) how many fifty cents a customer should be given if they’re owed some number of cents. For instance, if cents is 50, then the function should return 1. If cents is 51 or 79 (or anything in between, then it should still return 1.

>>Take care not to change the distribution code itself, only replace the given todos and the subsequent return values.


## Testing
For this program, try testing your code manually:

In your terminal, switch to the `change` directory and run `php index.php`.

- If you input -1, does your program prompts you again?  
- If you input 0, does your program output 0?  
- If you input 1, does your program output 1 (one cent)?  
- If you input 6, does your program output 6 (6 cents)?  
- If you input 5, does your program output 1 (one 5¢)?  
- If you input 24, does your program output 5 (one 20¢ and four 1¢)?
- If you input 99, does your program output 8 (one 50¢, two 20¢, one 5¢ and four 1¢)?  