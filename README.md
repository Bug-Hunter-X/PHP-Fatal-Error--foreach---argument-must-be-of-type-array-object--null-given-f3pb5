# PHP Unexpected Return Type in foreach Loop
This repository demonstrates a common PHP bug: a fatal error occurring when a `foreach` loop receives an unexpected data type from a function.  The `bug.php` file contains the erroneous code, and `bugSolution.php` provides the corrected version.  The bug arises because the `processData` function may return `null` under certain conditions, causing a fatal error when the `foreach` loop tries to iterate over it.

## How to reproduce:
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the fatal error message indicating that `foreach` expects an array or object, but received `null`.

## Solution:
The solution involves adding error handling to the `processData` function, ensuring it always returns an array (even in case of errors), as demonstrated in `bugSolution.php`.