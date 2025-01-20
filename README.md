# PHP Pass-by-Reference Array Bug

This repository demonstrates a common and subtle bug in PHP related to passing arrays by reference to functions that modify them.  The example shows how attempting to increment an array element directly using pass-by-reference leads to an error and doesn't work as intuitively expected.

The `bug.php` file contains the buggy code, and `bugSolution.php` offers a corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output compared to the intended behavior.

## Solution

The solution involves understanding how pass-by-reference works in PHP with arrays.  Direct manipulation of the array itself using pass-by-reference might not work as expected.  Instead, you should work with array elements directly or return a modified array.