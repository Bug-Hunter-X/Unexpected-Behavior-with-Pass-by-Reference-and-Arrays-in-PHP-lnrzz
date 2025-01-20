```php
<?php
function incrementArray(&$arr, $index) {
  if (isset($arr[$index])) {
    $arr[$index]++;
  } else {
    // Handle the case where the index doesn't exist
    trigger_error("Index not found", E_USER_WARNING);
  }
}

$arr = [1, 2, 3];
incrementArray($arr, 0);
echo $arr[0]; // Outputs 2

//Alternative: Return modified array
function incrementArray2(array $arr, int $index): array {
  if (isset($arr[$index])) {
    $arr[$index]++;
  }
  return $arr;
}
$arr2 = incrementArray2($arr, 1);
echo $arr2[1]; // Outputs 3
?>
```