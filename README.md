# PHP: Premature Function Return Bug

This repository demonstrates a common, yet subtle, bug in PHP code involving array traversal and premature function returns.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides the corrected version.

**Problem:**
The original code incorrectly returns `false` as soon as it encounters a zero value in the array, even if other non-zero values exist.

**Solution:**
The corrected code uses a `break` statement to exit the loop only, allowing the function to correctly evaluate the entire array.
