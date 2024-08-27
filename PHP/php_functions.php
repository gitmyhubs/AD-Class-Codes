<?php
function msg()
{
  echo "Hello AD Class";
}
msg(); // calling the function

// Example of some Built-in Function

// 1. strlen() - Returns the length of a string.
$string = "Hello AD Class";
echo strlen($string); 

// 2 str_replace() Replaces all occurrences of a search string with a replacement string.
$string = "Hello, World!";
$newString = str_replace("World", "PHP", $string);
echo $newString; 

// 3 explode()- Splits a string by a specified delimiter into an array.
$string = "Name,Email,Password";
$array = explode(",", $string);
print_r($array); 

// 4 implode() - Joins array elements into a single string with a specified delimiter.
$array = array("Name", "Email", "Password");
$string = implode(", ", $array);
echo $string; 

// 5 array_push() - Adds one or more elements to the end of an array.
$array = array("apple", "banana");
array_push($array, "cherry", "date");
print_r($array); 

// 6 array_pop() - Pops the last element off the end of an array.
$array = array("apple", "banana", "cherry");
$lastElement = array_pop($array);
echo $lastElement; 
print_r($array); 

// 7 array_merge() - Merges one or more arrays into one array.
$array1 = array("apple", "banana");
$array2 = array("cherry", "date");
$result = array_merge($array1, $array2);
print_r($result); 

// 8 count() - Counts all elements in an array or properties in an object.
$array = array("apple", "banana", "cherry");
echo count($array); 

// 9 isset() - Determines if a variable is set and is not null.
$var = "Hello";
if (isset($var)) {
    echo "This Variable is set."; 
}

// 10 empty() - Checks whether a variable is empty.
$var = "";
if (empty($var)) {
  echo "Variable is empty."; 
}

// 11 date() - Formats a local date and time.
echo date('Y-m-d H:i:s'); 
echo "<h1 style='color:red; text-align:center;'> 
The current Date and Time is : " . date('Y-m-d H:i:s') . "</h1>";

// 12 json_encode() - Returns the JSON representation of a value.
$array = array("name" => "John", "age" => 30);
$json = json_encode($array);
echo $json; 

// 13 json_decode() - Decodes a JSON string into a PHP variable.
// $json = '{"name":"John","age":30}';
// $array = json_decode($json, true);
// print_r($array); 

// Example of parameterized function
function add($a,$b)
{
  $sum = $a + $b;
  echo "The Addition of Two number is : $sum";
}
add(40,50);







?>