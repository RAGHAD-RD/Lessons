<?php

// array_push() 
array_push($array, $value1, $value2);

// array_pop() 
array_pop($array);

// array_shift() 
array_shift($array);

// array_unshift() 
array_unshift($array, $value1, $value2);

// array_merge() 
array_merge($array1, $array2);

// array_diff() 
array_diff($array1, $array2);

// array_intersect() 
array_intersect($array1, $array2);

// array_keys() 
array_keys($array);

// array_values() 
array_values($array);

// array_flip() 
array_flip($array);

// array_splice() 
array_splice($array, $offset, $length, $replacement);

// array_slice() 
array_slice($array, $offset, $length);

// array_map() 
array_map('function_name', $array);

// array_filter() 
array_filter($array, 'function_name');

// array_reduce() 
array_reduce($array, 'function_name');

// array_key_exists() 
array_key_exists($key, $array);

// in_array() 
in_array($value, $array);

// array_column() 
array_column($array, $column_key);

// array_unique() 
array_unique($array);

// array_sum() 
array_sum($array);

// array_product() 
array_product($array);

// count() 
count($array);

// sort() 
sort($array);

// rsort() 
rsort($array);

// asort() 
asort($array);

// ksort() 
ksort($array);

?>




<?php

// 1. strlen() 
$string = "Hello, world!";
echo strlen($string); 

// 2. strpos() 
$position = strpos($string, "world");
echo $position; 

// 3. strstr() 
$result = strstr($string, "world");
echo $result; 

// 4. substr() 
$sub = substr($string, 7, 5);
echo $sub; 

// 5. strtoupper() 
$upper = strtoupper($string);
echo $upper; 
// 6. strtolower() 
$lower = strtolower($string);
echo $lower; 

// 7. ucwords()
$words = "hello world";
$capitalized = ucwords($words);
echo $capitalized; 

// 8. ucfirst() 
$firstUpper = ucfirst("hello");
echo $firstUpper; 

// 9. str_replace() 
$newString = str_replace("world", "PHP", $string);
echo $newString; 

// 10. str_repeat() 
$repeated = str_repeat("abc", 3);
echo $repeated; 

// 11. trim() 
$trimmed = trim("   Hello, world!   ");
echo $trimmed; 

// 12. rtrim() 
$rtrimmed = rtrim("Hello, world!   ");
echo $rtrimmed; 

// 13. ltrim() 
$ltrimmed = ltrim("   Hello, world!");
echo $ltrimmed; 

// 14. str_split() 
$array = str_split($string);
print_r($array); 

// 15. implode() 
$joined = implode("-", $array);
echo $joined; 

// 16. explode() 
$array2 = explode(" ", $string);
print_r($array2); 

// 17. str_contains() 
$contains = str_contains($string, "world");
echo $contains ? 'Yes' : 'No'; 

// 18. str_starts_with() 
$startsWith = str_starts_with($string, "Hello");
echo $startsWith ? 'Yes' : 'No'; 

// 19. str_ends_with() 
$endsWith = str_ends_with($string, "world!");
echo $endsWith ? 'Yes' : 'No'; 

// 20. substr_count() 
$count = substr_count($string, "o");
echo $count; 

// 21. str_pad() 
$padded = str_pad("Hello", 10, "*");
echo $padded; 

// 22. str_shuffle() 
$shuffled = str_shuffle($string);
echo $shuffled;

// 23. levenshtein() 
$distance = levenshtein("kitten", "sitting");
echo $distance; 

// 24. soundex() 
$sound = soundex("hello");
echo $sound; 

// 25. htmlspecialchars() 
$htmlString = "<div>Hello & Welcome</div>";
$escaped = htmlspecialchars($htmlString);
echo $escaped; 

// 26. strip_tags() 
$cleanString = strip_tags($htmlString);
echo $cleanString; 

// 27. number_format() 
$number = 1234567.89;
$formatted = number_format($number, 2, '.', ',');
echo $formatted; 
?>
