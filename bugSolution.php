```php
function my_function($arr) {
  foreach ($arr as $value) {
    if ($value === 0) {
      return false; // Correct: check if any value is zero
    }
  }
  return true; // All values are not zero
}

function my_function_alternative($arr) {
  return !in_array(0, $arr, true); // More efficient solution using in_array
}
$arr1 = [1, 2, 3, 4, 0, 5];
$arr2 = [1, 2, 3, 4, 5];

echo my_function($arr1) ? 'true' : 'false'; // Output: false
echo my_function($arr2) ? 'true' : 'false'; // Output: true

echo my_function_alternative($arr1) ? 'true' : 'false'; // Output: false
echo my_function_alternative($arr2) ? 'true' : 'false'; // Output: true
```