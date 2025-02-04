```php
function my_function($arr) {
  foreach ($arr as $value) {
    if ($value === 0) {
      return false; // Incorrect: Should break the loop, not return
    }
  }
  return true; // Correct only if you want to check that all values are not zero
}

$arr1 = [1, 2, 3, 4, 0, 5];
$arr2 = [1, 2, 3, 4, 5];

echo my_function($arr1) ? 'true' : 'false'; // Output: false
echo my_function($arr2) ? 'true' : 'false'; // Output: true
```