```php
<?php
function increment(&$var) {
  $var++;
}

$num = 10;
increment($num);
echo $num; // Outputs 11

$arr = [1, 2, 3];
increment($arr); // Notice: Only variables should be passed by reference
echo $arr[0]; // Outputs 1
?>
```