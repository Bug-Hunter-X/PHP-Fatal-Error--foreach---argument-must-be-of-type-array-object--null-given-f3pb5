```php
function processData(array $data): array {
  // ... some code to process the data ...
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

// ... later in the code ...
foreach ($processedData as $item) {
  // ... use $item ...
}
```
This code will work as long as `processData` returns an array. However, if `processData` encounters an error or an unexpected condition, it may return `null` or some other non-array value which causes a fatal error during the foreach loop.