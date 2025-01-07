```php
<?php
function my_function($arg) {
  if ($arg === null) {
    return 'Argument is null';
  } elseif (is_string($arg) && strlen($arg) > 10) {
    return substr($arg, 0, 10) . '...';
  } elseif ($arg === 0) { //Explicit check for 0
    return 'Argument is zero';
  } else {
    return $arg;
  }
}

// Correct handling
echo my_function(0); // Outputs 'Argument is zero'
echo my_function(null); // Outputs 'Argument is null'
?>
```